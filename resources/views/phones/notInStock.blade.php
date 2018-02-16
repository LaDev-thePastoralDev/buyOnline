@extends('layouts.app')

@section('content')
    @yield('layouts.nav')
    <div class="row">

        @foreach($phonesNotInStock as $phone)


            <div class="col-md-4 col-md-offset-1">
                <div class="row">
                    <a href="{{route('phones.show',$phone->id)}}" title="{{$phone->phone.'  '.$phone->description}}"><img src="{{asset('images/images/'.$phone->image)}}" class="img-circle" style="max-height: 255px;max-width: 100px"/></a>
                    <p class="text-center">{{$phone->phone}}</p>
                    <p class="text-center">{{substr($phone->description,0,random_int(150,150))}}<a href="/phones/{{$phone->id}}" title="Read More">...</a></p>
                    <p class="text-center">{{$phone->cost}}</p>
                    {{--<div class="col-md-4">--}}
                        {{--<form action="{{route('phones.destroy',$phone->id)}}" method="POST">--}}

                            {{--{{csrf_field()}}--}}
                            {{--{{{method_field('DELETE')}}}--}}
                            {{--<a href="/phones/{{$phone->id}}" title="Delete Phone"><button  class="btn btn-danger btn-sm">Delete Phone</button></a>--}}
                            {{--<button  class="btn btn-danger btn-sm" title="Delete Phone">Delete Phone</button>--}}

                        {{--</form>--}}

                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<form action="{{route('add-to-cart')}}" method="POST">--}}

                            {{--{{csrf_field()}}--}}

                            {{--@auth--}}
                                {{--<input type="hidden" value="{{Auth::user()->email}}" name="userOnSession">--}}
                            {{--@endauth--}}

                            {{--<input type="hidden" value="{{$phone->id}}" name="addedPhone">--}}
                            {{--<button  title="Add Item to Cart" class="btn btn-danger btn-sm" name="add-to-cart">Add to Cart</button>--}}

                        {{--</form>--}}
                    {{--</div>--}}

                </div>
            </div>

        @endforeach

    </div>
    {{--</div>--}}
@endsection()