@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Manage Users</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('users.update',$user->id)}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="name" class="control-label" style="padding-left: 75px">Name</label>
                                    </div>

                                    <div class="col-md-6" style="padding-right: 25px">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="email" class="control-label" style="padding-left: 50px">Email</label>
                                    </div>

                                    <div class="col-md-6" style="padding-right: 25px">
                                        <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-lg-6 col-md-offset-2 col-lg-offset-2 col-sm-offset-2">
                                        <button type="submit" class="form-control btn btn-success btn-sm" name="Update User" id="updateUser">Update User</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection