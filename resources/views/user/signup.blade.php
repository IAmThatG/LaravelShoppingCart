<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 1/11/2017
     * Time: 5:38 PM
     */
?>

@extends('layouts.master')

@section('title')
    SignUp
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title"><h2>SignUp</h2></div>
                </div>
                <div class="panel-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach

                        </div>
                    @endif
                    <form method="post" class="form-horizontal" role="form" action="{{route('user.signup')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                {{--<div class="col-md-1 col-md-offset-1">
                                    <label for="email"><i class="fa fa-envelope"></i></label>
                                </div>--}}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                {{--<div class="col-md-1 col-md-offset-1">
                                    <label for="password"><i class="fa fa-asterisk"></i></label>
                                </div>--}}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-offset-1">
                            <button type="submit" class="btn btn-primary" name="signUp">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
