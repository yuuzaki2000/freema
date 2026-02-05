@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endsection

@section('content')
<div>
    <div class="upper">
        @isset($profile)
        <div>
            <img src="{{asset($profile->image)}}" alt="プロフィール画像">
        </div>
        @endisset
        <h2>{{$user->name}}</h2>
        <a href="/mypage/profile" class="skt-btn">プロフィールを編集</a>
    </div>
    <div class="bottom">
        <form action="/mypage" method="get" class="exhibition">
            <input type="hidden" name="page" value="sell">
            <button type="submit" class="exhibition-btn">出品した商品</button>
        </form>
        <form action="/mypage" method="get" class="purchase">
            <input type="hidden" name="page" value="buy">
            <button type="submit" class="purchase-btn">購入した商品</button>
        </form>
        <form action="/mypage" method="get" class="purchase">
            <input type="hidden" name="page" value="trade">
            <button type="submit" class="purchase-btn">取引中の商品</button>
        </form>
    </div>
    <div class="container">
        <ul class="group">
                @if (!empty($products))
                @foreach ($products as $product)
                        @php
                            $trade = App\Models\Trade::where('product_id', $product->id)->where('buyer_id',Auth::id())->first();
                        @endphp
                        <li class="compartment">
                            <form action="/products/{{$product->id}}/trades" class="item" method="GET">
                            @csrf
                                <button type="submit"><img src="{{asset($product->image)}}" alt="商品画像" width="100%"></button>
                                <div class="product-info">
                                    <p>{{$product->name}}</p>
                                </div>
                            </form>
                        </li>
                @endforeach
                @endif
        </ul>
    </div>
</div>
<div><p>{{$page}}</p></div>
@endsection