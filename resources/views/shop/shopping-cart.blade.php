<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 1/13/2017
     * Time: 10:47 PM
     */
?>

@extends('layouts.master')

@section('title')
    Shopping Cart
@stop

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{$product['qty']}}</span>
                            <strong>{{$product['item']['title']}}</strong>
                            <span class="label label-success">{{$product['price']}}</span>
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Action
                                        <span class="fa fa-arrow-circle-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Reduce by 1</a></li>
                                        <li><a href="#">Reduce All</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <button type="button" class="btn btn-success">
                    <span class="fa fa-shopping-cart"></span> Checkout
                </button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <h2 class="no-item">No Item in Cart!!!</h2>
            </div>
        </div>
    @endif
@stop

