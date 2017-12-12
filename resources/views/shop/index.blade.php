<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 1/11/2017
     * Time: 9:28 AM
     */
?>

@extends('layouts.master')

@section('title')
    Shopping Cart
@stop

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('images/'.$product->imagePath)}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3 class="text-center">{{$product->title}}</h3>
                            <p class="description text-center">
                                {{$product->description}}
                            </p>
                            <a href="{{route('shop.addToCart', ['id' => $product->id])}}" class="btn btn- btn-success btn-sm" role="button"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="#" class="btn btn-default btn-sm" role="button"><i class="fa fa-magic"></i>Add to wishlist</a>
                            <div class="pull-right price"><span class="fa fa-dollar"></span>{{$product->price}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@stop