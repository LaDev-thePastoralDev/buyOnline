@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        <span>Manage Roles</span>
                        <a href="{{route('roles.create')}}" class="pull-right"><button class="btn btn-sm btn-success"> Create New Role</button></a>
                    </h3>

                </div>

                    <div class="panel-body">
                        <table class="table table-responsive">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Description</th>
                            </tr>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="text-center">{{$role->id}}</td>
                                    <td class="text-center">{{$role->name}}</td>
                                    <td class="text-center">{{$role->description}}</td>
                                    <td class="text-center">
                                        <a href="{{route('roles.edit',$role->id)}}"><button class="btn-sm btn-success">edit</button> </a>
                                    </td>
                                    {{--<td class="text-center">--}}
                                        {{--<a href="{{route('roles.destroy',$role->id)}}"><button class="btn-sm btn-danger">Delete</button> </a>--}}
                                    {{--</td>--}}
                                    <td class="text-center">
                                        <form class="form-horizontal" action="{{route('roles.destroy',$role->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection