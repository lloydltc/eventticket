<?php

namespace App\Http\Controllers\Clients;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Category;
use App\Models\Payment;
use App\Http\Requests\PaymentRequest;
use Illuminate\Support\Facades\Auth;
use LaravelQRCode\Facades\QRCode;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    //

    public function index(){


        $events = Event::all();
        $orderCount =0;
        if(Auth::check()){
            $order = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();
            if(!empty($order)){
                $orderCount = $order->orderItem->count();
            }

        }

        return view('client.index', compact(['events','orderCount']));
    }

    public function cart($id){


        $event = Event::find($id);
        $orderCount =0;
        if(Auth::check()){
            $order = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();
            if(!empty($order)){
                $orderCount = $order->orderItem->count();
            }

            return view('client.ticket_cart', compact(['event','orderCount']));
        }else{
            return redirect()->route('showLogin');
        }


    }


    public function paynow(PaymentRequest $request){


        $ecocash_number = $request->input('ecocash_number');
        $order = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();

        $paynow = new \Paynow\Payments\Paynow(
            '19122',
            'dc9f152a-6caa-42a7-b3f5-6c35de8ba3c4',
            // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
            'https://f2df-102-217-50-74.ngrok-free.app',
            'https://f2df-102-217-50-74.ngrok-free.app/paynow/update',
        );


        $paynowPayment = $paynow->createPayment($order->id, 'chidyamapukaltc@gmail.com');

        $paynowPayment->add('Event Ticket', $order->amount);

        $response = $paynow->sendMobile($paynowPayment, '0771111111', 'ecocash');



        if($response->success){
            $payment = new Payment();
            $payment->user_id = Auth::user()->id;
            $payment->order_id = $order->id;
            $payment->reference = $response->data()['paynowreference'];
            $payment->pollurl = $response->data()['pollurl'];
            $payment->name = $request->input('name');
            $payment->email = $request->input('email');
            $payment->status = Order::ORDER_STATUS_CREATED;
            $payment->save();
            $order->ecocash_number = $ecocash_number;
            $order->save();

            return redirect()->route('paymentConfirmation')->with('succes', 'Payment initiated check your phone.');
        }else{
            return redirect()->back()->with('fail', 'Payment failed check your ecocash number.');
        }

    }

    public function paynowUpdate(Request $request){

        if(!empty($request) && $request->status == 'Paid'){
            $order = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();
            $payment = Payment::where('user_id', Auth::user()->id)->where('order_id', $order->id)->first();

            $payment->status =  Order::ORDER_STATUS_PAID;
            $payment->save();
            $order->save();
            // jsonresponse ok

        }

    }

    public function paymentConfirmation(){
        sleep(3);
        $paynow = new \Paynow\Payments\Paynow(
            '19122',
            'dc9f152a-6caa-42a7-b3f5-6c35de8ba3c4',
            // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
            'https://f2df-102-217-50-74.ngrok-free.app',
            'https://f2df-102-217-50-74.ngrok-free.app/paynow/update',
        );

        $order = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();
        if(!empty($order)){
            $payment = Payment::where('user_id', Auth::user()->id)->where('order_id', $order->id)->first();
            $pollUrl = $payment->pollurl;

            $status = $paynow->pollTransaction($pollUrl);
            if($status->paid()) {

            $order->status =  Order::ORDER_STATUS_PAID;
            $payment->status =  Order::ORDER_STATUS_PAID;


            $code = bcrypt($order->id.$payment->id.$payment->reference);

                $image = time().$order->id.'.'.'png';
                QRCode::text($code)
                ->setOutfile(Storage::disk("public")->path($image))
                ->png();

                // $fileName = time().'_' .  $image->getClientOriginalName();
                // $filePath =  $image->storeAs('qr', $fileName, 'public');

                $payment->code = $code;
                $payment->save();
                $order->save();
                // orderBy('updated_at','DESC')->first()->id
            return view('client.payment-confirmation', compact(['order','image']));
        }else{
            return view('client.payment-fail', compact('order'));

        }

        }else{
            return redirect()->route('home')->with('succes', 'Your cart is empty');
        }

    }

    public function downloadImage($filename)
    {
        $path = public_path('storage/'.$filename);
        // dd($path);

        // Check if the file exists
        if (!File::exists($path)) {
            abort(404, 'File not found.');
        }

        // Return the file as a response
        Response::download($path);
        return Response::download($path);
    }

    public function checkout(){
        $orders = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();
        $orderCount =0;
        if(!empty($order)){
            $orderCount = $order->orderItem->count();
        }


        return view('client.ticket_checkout',compact(['orders','orderCount']));

    }
}
