@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product_detail.css')}}">

@section('content')
<div class="total-container">
    <div class="left-container">
        <div><img src="{{asset('img/coffee_cup.jpg')}}" alt="" width="400px"></div>
    </div>
    <div class="right-container">
        <div>
            <div class="title-name"><p>{{$product->name}}</p></div>
            <div class="title-price"><p>{{$product->brand}}</p></div>
            <div><p>{{$product->price}}</p></div>
            <div class="btn-group">
                <div><img src="" alt="いいね" width="10px" height="10px"></div>
                <form action="/favorite/{{$product->id}}" method="post">
                @csrf
                    <div>
                        <button type="submit">いいね</button>
                    </div>
                </form>
                <div><img src="" alt="コメント" width="10px" height="10px"></div>
            </div>
            <form action="/purchase/{{$product->id}}" method="get">
                <button type="submit" class="btn">購入手続きへ</button>
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
        <form action="/comment/{{$product->id}}" method="post">
        @csrf
            <textarea name="content" cols="30" rows="10"></textarea>
            <button type="submit">コメントを送信する</button>
        </form>
    </div>
</div>
@endsection