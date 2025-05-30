@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/mypage.css')}}">

@section('content')
<div>
    <div class="upper">
        <div>
            <img src="" alt="">
        </div>
        <h2>ユーザー名</h2>
        <a href="/mypage/profile">プロフィールを編集</a>
    </div>
    <div class="bottom">
        <form action="/mypage" method="get" class="exhibition">
            <input type="hidden" name="page" value="sell">
            <button type="submit">出品した商品</button>
        </form>
        <form action="/mypage" method="get" class="purchase">
            <input type="hidden" name="page" value="buy">
            <button type="submit">購入した商品</button>
        </form>
    </div>
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
</div>
<div><p>{{$page}}</p></div>
@endsection