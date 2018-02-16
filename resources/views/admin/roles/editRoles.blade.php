@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Manage Roles</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('roles.update',$role->id)}}">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="name" class="control-label" style="padding-left: 75px">Name</label>
                                    </div>

                                    <div class="col-md-6" style="padding-right: 25px">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$role->name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="description" class="control-label" style="padding-left: 50px">Description</label>
                                    </div>

                                    <div class="col-md-6" style="padding-right: 25px">
                                        <input type="text" class="form-control" name="description" id="description" value="{{$role->description}}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-lg-6 col-md-offset-2 col-lg-offset-2 col-sm-offset-2">
                                        <button type="submit" class="form-control btn btn-success btn-sm" name="Update Role" id="createRole">Update Role</button>
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