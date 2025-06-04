@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product_detail.css')}}">

@section('content')
<div class="total-container">
    <div class="left-container">
        <div><img src="img/coffee_cup.jpg" alt=""></div>
    </div>
    <div class="right-container">
        <div>
            <div><p>{{$product->name}}</p></div>
            <div><p>{{$product->brand}}</p></div>
            <div><p>{{$product->price}}</p></div>
            <div class="btn-group">
                <div><img src="" alt="いいね" width="10px" height="10px"></div>
                <div><img src="" alt="コメント" width="10px" height="10px"></div>
            </div>
            <form action="/purchase/{{$product->id}}" method="get">
                <button type="submit" class="btn">購入画面へ</button>
            </form>
        </div>
        <div>
            <div class="subtitle">商品説明</div>
        </div>
        <div>
            <div class="subtitle">商品の情報</div>
            <div>
                <div class="item-label">カテゴリー</div>
                <div class="item-content"></div>
            </div>
            <div>
                <div class="item-label">商品の状態</div>
                <div class="item-content"></div>
            </div>
        </div>
        <div>
            <div class="subtitle">コメント（１）</div>
        </div>
    </div>
</div>
@endsection