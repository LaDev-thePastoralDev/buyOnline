@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Manage Users</div>

                    <div class="panel-body">
                        <table class="table table-responsive">
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Roles</th>
                            </tr>
                            {{--@foreach($users as $user)--}}
                                <tr>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->roles}}</td>

                                </tr>
                            {{--@endforeach--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection