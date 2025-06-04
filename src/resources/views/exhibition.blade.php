@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product_register.css')}}">

@section('title')
商品の出品

@section('content')
<div>
    <h4>商品画像</h4>
    <form action="/upload/product" method="post" enctype="multipart/form-data">
    @csrf
        <div class="around-btn">
            <input type="file" name="file">
            <button class="select-btn" type="submit">画像を選択する</button>
        </div>
    </form>
</div>
<div>
    <form action="/sell" method="post">
    @csrf
        <h3 class="h3">商品の詳細</h3>
        <div class="category-part">
            <input type="hidden" name="user_id" value="{{$userId}}">
            <input type="hidden" name="image" value="img/coffee_cup.jpg">

            <h4>カテゴリー</h4>
            <input type="checkbox" name="category" value="1">ファッション
            <input type="checkbox" name="category" value="2">家電
            <input type="checkbox" name="category" value="3" checked="checked">インテリア
            <input type="checkbox" name="category" value="4">レディース
            <input type="checkbox" name="category" value="5">メンズ
            <input type="checkbox" name="category" value="6">コスメ
            <input type="checkbox" name="category" value="7">本
            <input type="checkbox" name="category" value="8">ゲーム
            <input type="checkbox" name="category" value="9">スポーツ
            <input type="checkbox" name="category" value="10">キッチン
            <input type="checkbox" name="category" value="11">ハンドメイド
            <input type="checkbox" name="category" value="12">アクセサリー
            <input type="checkbox" name="category" value="13">おもちゃ
            <input type="checkbox" name="category" value="14">ベビー・キッズ
        </div>
        <div class="condition-part">
            <h4>商品の状態</h4>
            <select name="condition">
                <option value="1">良好</option>
                <option value="2">目立った傷や汚れなし</option>
                <option value="3">やや傷や汚れあり</option>
                <option value="4">状態が悪い</option>
            </select>
        </div>
        <h3 class="h3">商品名と説明</h3>
        <div class="name-part">
            <h4>商品名</h4>
            <input type="text" name="name">
        </div>
        <div class="brand-part">
            <h4>ブランド名</h4>
            <input type="text" name="brand">
        </div>
        <div class="description-part">
            <h4>商品の説明</h4>
            <input type="text" name="description">
        </div>
        <div class="price-part">
            <h4>販売価格</h4>
            <input type="text" name="price">
        </div>
        <button class="btn" type="submit">出品する</button>
    </form>
</div>

    
@endsection