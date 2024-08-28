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
                                {{-- <div class="item">
                                    <a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
                                </div> --}}
                                <div class="item">
                                    <a href="{{route('showLogin')}}" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                                </div>
                                <div class="item">
                                    <a href="{{route('showLogin')}}" title="Register Account"><i class="fa fa-user"></i>Register</a>
                                </div>
                                <div class="item">
                                    <a href="{{route('logout')}}" title="Register Account"><i class="fa fa-user"></i>Register</a>
                                </div>

                            </div>
                        </div>

                        <!-- Language -->



                    </div>
                </div>
            </div>
        </div>

        <!-- Open Topbar -->
        <div class="container active" style="padding: 2px">
            <div id="toggle-topbar" ><i class="zmdi zmdi-plus" style="margin-top: 10px"></i></div>
        </div>
    </div>

    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Search -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-search">
                        <form action="/" method="get">
                            <span >Home</span>
                            <button type="submit"><i class="zmdi zmdi-menu"></i></button>
                        </form>
                    </div>
                </div>

                <!-- Logo -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="/">
                            <img class="img-responsive" src="{{asset('assets/client/img/st.png')}}" width="80" height="80" alt="Logo">
                        </a>
                    </div>

                    <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                </div>

                <!-- Cart -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="block-cart dropdown">
                        <div class="cart-title">
                            <i class="fa fa-shopping-basket" style="margin-top: 10px"></i>
                            <span class="cart-count">{{$orderCount}}</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


</header>

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
