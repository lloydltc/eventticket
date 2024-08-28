<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ShowCart extends Component
{

    public $event;
    public $total;

    public function mount($event){
        $this->event = $event;
    }

    public function render()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();



        $this->total = DB::table('order_items')
        ->join('tickets', 'order_items.ticket_id', '=', 'tickets.id')
        ->sum(DB::raw('order_items.quantity * tickets.price'));
        $orders->amount = $this->total;
        $orders->save();

        return view('livewire.show-cart',compact('orders'));
    }

    public function addToCart($id){

        $ticket = Ticket::find($id);
        $order_db = Order::where('user_id', Auth::user()->id)->where('status', Order::ORDER_STATUS_CREATED)->first();
        if(empty($order_db)){

            $order = new Order();
            $order->amount =$ticket->price;
            $order->user_id = Auth::user()->id;
            $order->ecocash_number = "0000";
            $order->status = Order::ORDER_STATUS_CREATED;
            $order->save();

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->ticket_id = $ticket->id;
            $orderItem->quantity  = 1;
            $orderItem->save();

        }else{
            $orderItem = OrderItem::where('order_id', $order_db->id)->where('ticket_id',$ticket->id)->first();
            if(empty($orderItem)){
                OrderItem::create([
                    'order_id'=>$order_db->id,
                    'ticket_id'=>$id,
                    'quantity'=>1
                ]);
                }else{
                    $orderItem->quantity = $orderItem->quantity+1;
                    $orderItem->update();


                }
        }

    }

    public function add($id){
        $orderItem = OrderItem::find($id);
        $orderItem->quantity = $orderItem->quantity+1;
        $orderItem->update();


    }

    public function less($id){
        $orderItem = OrderItem::find($id);
        if($orderItem->quantity >0){
            $orderItem->quantity = $orderItem->quantity-1;
            $orderItem->update();
        }else{
            $orderItem->delete();
        }


    }
    public function remove($id){
        $orderItem = OrderItem::find($id);
        $orderItem->delete();

    }

   

}
