@extends('admin.adminDashboard')

@section('content')
<div class="container">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            <span>Manage Users</span>
                            <a href="{{route('users.create')}}" class="pull-right"><button class="btn btn-sm btn-success"> Create User</button></a>
                        </h3>

                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td>

                                <td class="text-center">
                                    <a href="{{route('users.edit',$user->id)}}"><button class="btn-sm btn-success">edit</button> </a>
                                </td>
                                <td class="text-center">
                                    <form class="form-horizontal" action="{{route('users.block',$user->id)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <button class="btn-sm btn-danger">block</button>
                                    </form>
                                </td>

                                <td class="text-center">
                                    <form class="form-horizontal" action="{{route('users.destroy',$user->id)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
</div>
</div>

@endsection