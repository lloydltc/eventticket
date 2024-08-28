<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventImage;
class AdminEventController extends Controller
{
    //

    public function index(){

        return view('admin.events');
    }

    public function create(){
        return view('admin.create-event');
    }

    public function store(EventRequest $request){
        $file = $request->file('image');
        $event = new Event();
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->starting_at = $request->input('starting_at');
        $event->end_at = $request->input('end_at');
        $event->total_tickets = $request->input('tickets');
        $event->category_id = 1;
        $event->save();


        if($file){
            $fileName = time().'_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');


            EventImage::create([
                'path' => $filePath,
                'event_id' => $event->id
            ]);


        }
        return redirect()->back()->with('succes', 'Event stored successfully.');


    }
}
