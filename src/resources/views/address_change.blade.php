@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/address_change.css')}}">

@section('title')
住所の変更

@section('content')
<form class="inner" action="/purchase/address/{{$product->id}}" method="post">
    @csrf
        <div class="content">
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value="{{}}">
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value="">
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value="">
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
</form>

@endsection