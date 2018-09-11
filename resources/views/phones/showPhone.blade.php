@extends('layouts.app')

@section('content')
    <div class="row">


            <div class="col-md-4 col-md-offset-1">
                <div class="row">
                    <img  class="img-circle" style="max-height: 255px;max-width: 100px" src="{{asset('images/images/'.$phone->image)}}" alt="Phones Image"/>
                    <p class="text-center">{{$phone->phone}}</p>
                    <p class="text-center">{{$phone->description}}</p>
                    <p class="text-center">{{$phone->cost}}</p>
                </div>

                <div class="row">

                    <div class="col-md-3">
                        <a href="{{route('phones.edit',$phone->id)}}"><button class="btn btn-success btn-sm">Edit</button></a>
                    </div>

                    <div class="col-md-3">
                        <form action="{{route('add-to-cart')}}" method="post" enctype="multipart/form-data">

                            @auth
                                <input type="hidden" value="{{Auth::user()->email}}" name="userOnSession">
                            @endauth

                            {{csrf_field()}}
                            <input type="hidden" value="{{$phone->id}}" name="addedPhone">
                            <button class="btn btn-sm btn-danger" title="Add to cart" name="add-to-cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>


    </div>
@endsection()