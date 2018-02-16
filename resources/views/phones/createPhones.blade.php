@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <p class="panel-heading">Create New Phone</p>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('phones.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                     <label for="phone" class="control-label" style="padding-left: 100px">Phone</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="phone" id="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="phoneDescription" class="control-label" style="padding-left: 70px">Description</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="description" id="phoneDescription" required>
                                </div>
                            </div>
                        </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="phoneDescription" class="control-label" style="padding-left: 100px">Image</label>
                                    </div>

                                    <div class="col-md-6" style="padding-right: 25px">
                                        <input type="file" class="form-control" name="image" id="phoneImage" required>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="phoneCost" class="control-label" style="padding-left: 115px">Cost</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="cost" id="phoneCost" required>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-lg-6 col-md-offset-2 col-lg-offset-2 col-sm-offset-2">
                                    <button type="submit" class="form-control btn btn-success btn-sm" name="Create Phone" id="createPhone">Create New Phone</button>
                                </div>
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
