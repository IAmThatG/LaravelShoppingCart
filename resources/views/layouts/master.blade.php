<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 1/11/2017
     * Time: 9:07 AM
     */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('/css/app.css')}}">

    @yield('styles')
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/respond.min.js')}}"></script>

    <![endif]-->

</head>
<body>
@include('partials.header')

<div class="container-fluid">
    @if(Session::has('flash_msg'))
        <div class="alert alert-{{(Session::get('flash_msg_type'))}}">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="text-center"><b>{{Session::get('flash_msg')}}</b></div>
        </div>
    @endif

    @yield('content')
</div>

<script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
@yield('scripts')
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>