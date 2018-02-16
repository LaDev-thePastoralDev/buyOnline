@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">
                       All Orders

                    </h3>

                </div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <tr>
                            <th class="text-center">Order Id</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Ordered Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-center">{{$order->id}}</td>
                                <td class="text-center">{{$order->client}}</td>
                                <td class="text-center">{{$order->product}}</td>
                                <td class="text-center">{{$order->quantity}}</td>
                                <td class="text-center">{{$order->price}}</td>
                                <td class="text-center">{{$order->orderedDate}}</td>
                                <td class="text-center">{{$order->orderShipped}}</td>

                                <td class="text-center">
                                    <form class="form-horizontal" action="#" method="post">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <button class="btn-sm btn-success">Commission</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                    {{--{{$ordersToCommission->links()}}--}}
                </div>
            </div>
        </div>
    </div>

@endsection