@extends('layouts.app')

@section('content')
    <div class="row" id="app">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <p class="panel-heading">Create New User</p>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('users.store')}}">
                        {{--@submit.prevent="onSubmit"--}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="name" class="control-label" style="padding-left: 100px">Name</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                    {{--{{$errors->has('name') ? 'alert-danger':''}}--}}
                                    {{--v-model="name"--}}
                                    @if($errors->has('name'))
                                        <hr>
                                        <p class="alert-danger">{{$errors->first('name')}}</p>
                                        {{--<span class="alert-danger" v-text="errors.get('name')"></span>--}}
                                    @endif

                                    {{--<span class="alert-danger" v-text="errors.get('name')"></span>--}}
                                </div>


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="email" class="control-label" style="padding-left: 100px">Email</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                                    {{--v-model="email"--}}

                                    @if($errors->has('email'))
                                        <p class="alert-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="password" class="control-label" style="padding-left: 70px">Password</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
                                    {{--v-model="password"--}}

                                    @if($errors->has('password'))
                                        <p class="alert-danger">{{$errors->first('password')}}</p>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="confirmPassword" class="control-label" style="padding-left: 25px">Confirm Password</label>
                                </div>

                                <div class="col-md-6" style="padding-right: 25px">
                                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" value="{{old('confirmPassword')}}">
                                    {{--v-model="confirmPassword"--}}

                                    @if($errors->has('confirmPassword'))
                                        <p class="alert-danger">{{$errors->first('confirmPassword')}}</p>
                                    @endif

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-lg-6 col-md-offset-2 col-lg-offset-2 col-sm-offset-2">
                                    <button type="submit" class="form-control btn btn-success btn-sm" name="Create User" id="createPhone">Create New User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--@section('scripts')--}}
    {{--<script>--}}

        {{--class Errors {--}}
                {{--constructor(){--}}
                    {{--this.errors={};--}}
                {{--}--}}

                {{--get(field){--}}

                    {{--if (this.errors[field]){--}}
                       {{--return this.errors[field][0];--}}
                    {{--}--}}

                {{--}--}}

                {{--record(errors){--}}
                    {{--this.errors=errors;--}}
                {{--}--}}
        {{--}--}}
        {{--var app=new Vue({--}}
            {{--el:'#app',--}}

            {{--data:{--}}
                {{--name:'',--}}
                {{--email:'',--}}
                {{--password:'',--}}
                {{--confirmPassword:'',--}}
                {{--errors: new Errors()--}}
            {{--},--}}


            {{--methods:{--}}
                {{--onSubmit(){--}}
                    {{--axios.post('/manage/users/create',this.$data)--}}

                        {{--.then(response => alert('Success'));--}}

                        {{--.catch(error => this.errors.record(error.response.data);--}}
                {{--}--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}

