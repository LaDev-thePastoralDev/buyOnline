<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BuyOnLine - Administration</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="row container-fluid">
@include('_includes.nav.main')
</div>
<div class="row">
<div class="col-md-4">
@include('_includes.nav.manage')
</div>
<div id="app" class="col-md-6 col-lg-6">
    @yield('content')
</div>
    <div class="col-md-2"></div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
