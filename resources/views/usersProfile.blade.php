@extends('layouts.app')

@section('content')



        <h3>{{Auth::user() -> name}}</h3>
        <i>{{Auth::user() -> email}}</i>

	
@endsection