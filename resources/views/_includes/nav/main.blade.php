<!DOCTYPE html>
<html>
<body>

<nav class="nav navbar-default navbar-static-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}" target="" style="color:#636b6f" title="Home"><span class=""></span>Buy Online</a>
    </div>

    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

            @guest
            <li><a href="{{route('home')}}"  class="nav-tabs" title="Home">Home</a></li>
            <li><a href="{{route('register')}}"  class="nav-tabs" title="Register for an Account.">Register</a></li>
            <li><a href="{{route('login')}}" class="nav-tabs" title="Log In.">Log In</a></li>
            <li><a href="{{route('carts.index')}}" class="nav-tabs" title="View Your Cart.">Cart</a></li>

            @else
                <li> <a href="{{ route('carts.index') }}" class="fa fa-cart"><span style="color: red"> 
                    <?php
                        $authUser = Auth::user()->email;
                    ?>
                    {{\App\Cart::where('client','=',$authUser)->where('orderShipped','notShipped')->sum('quantity')}}</span>Cart</a></li>
                        {{--{{DB::table('carts')->where('client',"$authUser" AND 'orderShipped','notShipped')->value('quantity')}}</span>Cart</a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a href="{{route('users.profile',Auth::user()->id )}}" >View Profile</a>
                        </li>

                        <li>
                            <a href="{{route('orders.history')}}" >Order History</a>
                        </li>


                        <li>
                            <a href="#" >Address Book</a>
                        </li>

                        <li>
                            <a href="#" >Change Password</a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<br>
</body>
</html>