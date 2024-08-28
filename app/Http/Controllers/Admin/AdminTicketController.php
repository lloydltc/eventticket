<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use App\Models\Event;
use App\Models\Ticket;

class AdminTicketController extends Controller
{
    //
    public function index($id){

        $event = Event::find($id);

        return view('admin.tickets', compact('event'));
    }

    public function create($id){
        $event_id = $id;
        return view('admin.create-tickets',compact('event_id'));
    }

     public function store(TicketRequest $request){
      
        $ticket = new Ticket();
        $ticket->price = $request->input('price');
        $ticket->tickets = $request->input('tickets');
        $ticket->event_id = $request->input('event_id');
        $ticket->ticket_type_id = 1;
        $ticket->save();
        return redirect()->back()->with('succes', 'Ticket stored successfully.');
     }
}
