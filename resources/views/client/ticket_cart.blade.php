@extends('layouts.client')
@section('content')
    <div id="all">


            @include('layouts.client-header')




            <div id="content" class="site-content">
				<!-- Breadcrumb -->


                @livewire('show-cart', ['event'=>$event])
			</div>









            @include('layouts.client-footer')
