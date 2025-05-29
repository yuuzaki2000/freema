@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}">

@section('content')
<div>
    <div class="left-container">
        <div>
            <img src="storage/img/hanako_image.png" alt="">
        </div>
    </div>
    <div class="right-container">
        <p>{{$product->name}}</p>
        <p>{{$product->price}}</p>
    </div>
    <a href="/purchase/{{$product->id}}" class="btn">購入画面へ</a>
</div>
@endsection