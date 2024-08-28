@extends('layouts.admin')
@section('content')
<div class="" >
    <div class="md-content">
        <h3 class="f-26">Add Ticket</h3>
        <div>
            <form class="form-control" action="{{route('storeTicket')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="event_id" value="{{$event_id}}" hidden>

                @if (session('succes'))
                <div class="alert alert-success background-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icofont icofont-close-line-circled text-white"></i>
                    </button>
                    <strong>{{ Session::get('succes') }}!</strong>
                </div>
                @endif
            <div class="input-group">

                <input type="number" class="form-control " name="price" placeholder="Price">
            </div>
            <div class="input-group">

                <input type="number" class="form-control " name="tickets" placeholder="Tickets">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block">Save</button>
                </div>
            </form>
        </div>
</div>


@endsection
