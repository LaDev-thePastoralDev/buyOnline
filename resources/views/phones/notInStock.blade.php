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

                </div>
            </div>

        @endforeach

    </div>
@endsection()