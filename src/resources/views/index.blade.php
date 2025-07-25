@extends('layouts.app_keyword')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
@section('content')
<div>
    <div class="tab">
        <form action="/" method="get" class="favorite">
            <input type="hidden" name="page" value="favorite">
            <button type="submit" class="favorite-btn">おすすめ</button>
        </form>
        <form action="/" method="get" class="mylist">
            <input type="hidden" name="page" value="mylist">
            <input type="hidden" name="keyword" value="{{$keyword}}">
            <button type="submit" class="mylist-btn">マイリスト</button>
        </form>
    </div>
    <div class="container">
        <ul class="group">
                @if (!empty($products))
                @foreach ($products as $product)
                        <li class="compartment">
                            <form action="/item/{{$product->id}}" class="item" method="GET">
                                <button type="submit"><img src="{{asset($product->image)}}" alt="商品画像" width="100%"></button>
                                <div class="product-info">
                                    <p>{{$product->name}}</p>
                                    <p>{{$product->isSold}}</p>
                                </div>
                                <input type="hidden" name="imageUrl" value="img/white_star.png">
                            </form>
                        </li>
                @endforeach
                @endif
        </ul>
    </div>
</div>
@endsection

