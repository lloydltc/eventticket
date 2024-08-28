@extends('layouts.client')
@section('content')
<div id="all">
    <!-- Main Content -->
    <div id="content" class="site-content page-404">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 page-left">
                    <div class="image">
                        <img class="img-responsive" src="{{asset('storage/'.$image)}}" alt="Image">
                    </div>
                    <div class="title">Thank you. Order Paid</div>
                    <div class="content">Download the qr code and keep it safe</div>
                    <a class="btn btn-primary" href="{{ route('downloadImage', ['filename' => $image]) }}"><i class="fa fa-home" aria-hidden="true"></i><span>Download</span></a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 page-right">
                    <div class="image">
                        <img class="img-responsive" src="{{asset('assets/client/img/check_mark.png')}}" alt="Image ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader" style="display: none;">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>
@endsection
