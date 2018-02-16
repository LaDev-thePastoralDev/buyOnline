@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <h5 class="panel-heading text-center">Your Order History</h5>

        <div class="panel-body">
            <table class="table table-bordered">
            <tr>
                <th class="text-center">Product</th>
                <th class="text-center">Order Date</th>
                <th class="text-center">Status</th>
                <th class="text-center">Unit Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Sub Total</th>

            </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->product}}</td>
                        <td>{{$order->orderedDate}}</td>
                        <td>{{$order->orderShipped}}</td>
                        <td>{{$order->price/$order->quantity}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price }}</td>

                    </tr>
                    @endforeach
                <tr>
                    <td colspan="5" style="padding-left: 80%"><b>Totals</b></td>
                    <td>
                        {{
                        DB::table('carts')->where('client',Auth::user()->email)
                                          ->where('orderShipped','shipped')
                                          ->sum('price')
                        }}
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </div>
@endsection