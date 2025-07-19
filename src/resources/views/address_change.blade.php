@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/address_change.css')}}">
@endsection

@section('title')
<div class="title">住所の変更</div>
@endsection

@section('content')
  <div class="container">
    <form class="inner" action="/purchase/address/{{$product->id}}" method="post">
        @csrf
        <div class="content">
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value={{$post_code}}>
            </div>
            @error('post_code')
            <div>
                <p class="error-message">{{$errors->first('post_code')}}</p>
            </div>
            @enderror
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value={{$address}}>
            </div>
            @error('address')
            <div>
                <p class="error-message">{{$errors->first('address')}}</p>
            </div>
            @enderror
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value={{$building}}>
            </div>
            @error('building')
            <div>
                <p class="error-message">{{$errors->first('building')}}</p>
            </div>
            @enderror
            <button type="submit" class="btn">更新する</button>
        </div>
    </form>
  </div>
@endsection