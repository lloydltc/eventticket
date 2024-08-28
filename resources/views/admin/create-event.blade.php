@extends('layouts.admin')
@section('content')
<div class="addcontact">
    <div class="md-content">
        <h3 class="f-26">Add Event</h3>
        <div>
            <form class="form-control" action="{{route('storeEvent')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('succes'))

                <div class="alert alert-success background-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icofont icofont-close-line-circled text-white"></i>
                    </button>
                    <strong>{{ Session::get('succes') }}!</strong>
                </div>
                @endif
            <div class="input-group">

                <input type="text" class="form-control pname" name="name" placeholder="Event Name">
            </div>
            <div class="input-group">

                <input type="text" class="form-control pname" name="description" placeholder="Event Description">
            </div>


            <div class="row">

                <div class="input-group col-lg-6">

                    <input type="text" class="form-control pamount"  name="tickets" placeholder="Tickets">
                </div>

                <div class="input-group col-lg-6">
                    <input type="file"  class="form-control " name="image" placeholder="Event Image">
                    {{-- <span class="input-group-addon btn btn-primary">Chooese File</span> --}}
                </div>

{{--
                <div class="input-group col-lg-6">
                    <select id="hello-single" class="form-control stock">
                        <option value="">---- Select Stock ----</option>
                        <option value="In Stock">In Stock</option>
                        <option value="Out">Out of Stock</option>

                    </select>
                </div> --}}
            </div>


            <div class="row">
            <div class="input-group col-lg-6">
                <input class="form-control" name="starting_at" type="datetime-local">

            </div>

            <div class="input-group col-lg-6">
                <input class="form-control" name="end_at" type="datetime-local">

            </div>

            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
