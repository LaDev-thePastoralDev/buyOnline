<aside>

    <p>
        General
    </p>
                <ul>
                    <li><a href="{{route('admin.adminDashboard')}}">Admin Dashboard</a> </li>
                </ul>
    {{--<nav class="navbar navbar-default navbar-static-top">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}

                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--<img class="img-circle" style="max-height: 35px" src="{{asset('images/images/ThemDays.jpg')}}" alt="BuyOnLine Logo"/>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--&nbsp;--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}    {{--<nav class="navbar navbar-default navbar-static-top">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}

                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--<img class="img-circle" style="max-height: 35px" src="{{asset('images/images/ThemDays.jpg')}}" alt="BuyOnLine Logo"/>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--&nbsp;--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--<li> <a href="{{ route('carts.index') }}" class="fa fa-cart">Cart</a></li>--}}
                    {{--@else--}}
                        {{--<li> <a href="{{ route('carts.index') }}" class="fa fa-cart"><span style="color: red"> {{count(\App\Cart::all())}}</span>Cart</a></li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu">--}}
                                {{--<li>--}}
                                    {{--<a href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--Logout--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

                        {{--<li> <a href="{{ route('carts.index') }}" class="fa fa-cart">Cart</a></li>--}}
                    {{--@else--}}
                        {{--<li> <a href="{{ route('carts.index') }}" class="fa fa-cart"><span style="color: red"> {{count(\App\Cart::all())}}</span>Cart</a></li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu">--}}
                                {{--<li>--}}
                                    {{--<a href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--Logout--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    <p>
        Administration
    </p>
    <ul>
        <li><a href="{{route('users.index')}}">Manage Users</a> </li>
        <li><a href="{{route('roles.index')}}">Roles &amp; Permissions</a> </li>
    </ul>

    <p>
        Manage Items
    </p>
    <ul>
        <li><a href="{{route('phones.create')}}">Add New Phone</a> </li>
        <li><a href="{{route('phones.index')}}">Available Phones</a> </li>
        <li><a href="{{route('phones.notInStock')}}">Phones not In Stock</a> </li>
    </ul>


    <p>
        Manage Orders
    </p>
    <ul>
        <li><a href="{{route('orders.index')}}">All Orders</a> </li>
        <li><a href="{{route('phones.index')}}">View Pending Orders</a> </li>
        <li><a href="{{route('orders.toCommission')}}">Orders to Commission</a> </li>
        <li><a href="#">Delete Order</a> </li>
    </ul>

            {{--<div class="col-md-8">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading text-center">Admin Dashboard</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--This is Admin Dashboard. You must be privileged to be here !--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

</aside>