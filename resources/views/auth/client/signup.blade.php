@extends('layouts.client')
@section('content')
    <div id="all">
        <!-- Header -->
        <header id="header">
            <!-- Topbar -->


            <!-- Header Top -->

            <header id="header">
                <!-- Topbar -->
                <div class="topbar">
                    <!-- Close Topbar -->
                    <div class="close-topbar">
                        <i class="zmdi zmdi-close"></i>
                    </div>

                    <!-- Topbar Content -->
                    <div class="container topbar-content">
                        <div class="row">
                            <!-- Topbar Left -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="topbar-left d-flex">
                                    <div class="email">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>Email: info@salmatech.co.zw
                                    </div>

                                </div>
                            </div>

                            <!-- Topbar Right -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="topbar-right d-flex justify-content-end">
                                    <!-- My Account -->
                                    <div class="dropdown account">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            My Account
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="item">
                                                <a href="#" title="Log in to your customer account"><i
                                                        class="fa fa-cog"></i>My Account</a>
                                            </div>
                                            <div class="item">
                                                <a href="user-login.html" title="Log in to your customer account"><i
                                                        class="fa fa-sign-in"></i>Login</a>
                                            </div>
                                            <div class="item">
                                                <a href="user-register.html" title="Register Account"><i
                                                        class="fa fa-user"></i>Register</a>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Language -->



                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Open Topbar -->
                    <div class="container active">
                        <div id="toggle-topbar"><i class="zmdi zmdi-plus"></i></div>
                    </div>
                </div>

                <!-- Header Top -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Search -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-search">
                                    <form action="#" method="get">
                                        <input type="text" class="form-input" placeholder="Search">
                                        <button type="submit" class="fa fa-search"></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Logo -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="logo">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('assets/client/img/bg-nav.png') }}"
                                            alt="Logo">
                                    </a>
                                </div>

                                <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                            </div>

                            <!-- Cart -->

                        </div>
                    </div>
                </div>


            </header>




            <div id="content" class="site-content">
                <!-- Breadcrumb -->

                <div class="container">
                    <div class="register-page">
                        <div class="register-form form">
                            <div class="block-title">
                                <h2 class="title"><span>Create Account</span></h2>
                            </div>

                            <form action="{{ route('postSignup') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" value="" name="name">
                                </div>



                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" value="" name="email">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" value="" name="password">
                                </div>

                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-primary" value="Create Account">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>









@include('layouts.client-footer')
