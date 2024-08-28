@extends('layouts.admin')
@section('content')
<div>
    @livewire('show-tickets', ['event'=> $event])
</div>
@endsection
