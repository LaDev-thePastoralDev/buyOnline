@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <p class="panel-heading">Edit Phone Details</p>
                <div class="panel-body">

                    <div class="row col-md-offset-3">
                        <img src='{{asset('images/images/'.$phone->image)}}' class="img-circle" style="max-height: 255px;max-width: 100px;padding: 15px"  alt="Phones Image"/>
                    </div>

                    <form class="form-horizontal" method="POST" action="{{route('phones.update',$phone->id)}}" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="phone" class="control-label" style="padding-left: 100px">Phone</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{$phone->phone}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="phoneDescription" class="control-label" style="padding-left: 70px">Description</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="description" id="phoneDescription" value="{{$phone->description}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="phoneImage" class="control-label" style="padding-left: 100px">Image</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="file" class="form-control" name="image" id="phoneImage" value="{{$phone->image}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="phoneCost" class="control-label" style="padding-left: 115px">Cost</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="cost" id="phoneCost" value="{{$phone->cost}}">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-2">
                                    <button type="submit" class="form-control btn btn-success btn-sm" name="Edit Phone" id="editPhone">Update Phone Details</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
