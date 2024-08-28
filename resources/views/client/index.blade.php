@extends('layouts.client')
@section('content')
    <div id="all">
        <!-- Header -->
       @include('layouts.client-header')




            <div class="section latest-news" style="padding: 0px">
                <div class="block-title">

                    <h2 class="title">Upcoming <span>Events</span></h2>
                </div>

                <div class="block-content">
                    <div class="container">
                        <div class="row">
                            @foreach ($events as $event )
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-8" style="padding: 8px">
                                <div class="blog-item">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="zoom-effect">
                                            @if (!$event->eventImage->isEmpty())

                                            <img src="{{asset('storage/'.$event->eventImage->first()->path)}}" width="150" height="150" alt="Image">
                                            @else
                                            <img src="{{asset('assets/client/img/grass.png')}}" alt="Image">
                                          @endif
                                        </a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-time">
                                            <span><i class="zmdi zmdi-calendar-note"></i>{{date($event->starting_at)}}</span>
                                            <span><i class="zmdi zmdi-calendar-note"></i>{{date($event->end_at)}}</span>
                                        </div>
                                        <div class="blog-title"><a href="{{route('cart',$event->id)}}">{{$event->name}}</a></div>
                                        <div class="blog-desc">{{$event->description}}</div>
                                        <div class="readmore"><a href="{{route('cart',$event->id)}}">Get Ticket</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>






            @include('layouts.client-footer')
