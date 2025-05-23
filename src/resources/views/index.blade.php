@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('content')
<div class="container">
    <ul class="group">
            @foreach ($products as $product)
                    <li class="compartment">
                        <div class="img-wrapper">
                            <img src="{{$product->image}}" alt="商品画像" width="100%">
                            <p>{{$product->name}}</p>
                        </div>
                    </li>
            @endforeach
    </ul>
</div>
@endsection

