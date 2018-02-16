@extends('layouts.app')

@section('content')
    @yield('layouts.nav')

 <div class="panel panel-default">
     <h4 class="panel-heading">Your Active Cart</h4>
    <div class="row panel-body">
    {{--<h5 class="panel-title text-center">Active Cart</h5>--}}
        @foreach($cartGoods as $cartGood)


            {{--<div class="col-md-4 col-md-offset-1">--}}
                <div class="row">

                        {{--<img src="{{asset('images/images/'.$cartGood->phone->image)}}" class="img-circle" style="max-height: 255px;max-width: 100px"/>--}}
                        <p class="col-md-offset-1 col-sm-offset-1">{{$cartGood->product}}</p>
                        {{--<p class="text-center">{{$cartGood->phone->description}}</p>--}}
                    <p class="col-md-offset-1 col-sm-offset-1"><span>Quantity</span>{{$cartGood->quantity}}</p>
                        <p class="col-md-offset-1 col-sm-offset-1">{{$cartGood->price}}</p>


                </div>
        <br>
            {{--</div>--}}
        @endforeach

    </div>
 </div>

    <div class="row">
        <button type="submit" class="btn btn-sm btn-success form-control pull-right" title="Check Out" >Check Out</button>
    </div>



@endsection()