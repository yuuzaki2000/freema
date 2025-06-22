@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('content')
<div>
    <div class="tab">
        <form action="/" method="get" class="favorite">
            <input type="hidden" name="page" value="favorite">
            <button type="submit" class="favorite-btn">おすすめ</button>
        </form>
        <form action="/" method="get" class="mylist">
            <input type="hidden" name="page" value="mylist">
            <button type="submit" class="mylist-btn">マイリスト</button>
        </form>
    </div>
    <div class="container">
        <ul class="group">
                @foreach ($products as $product)
                        <li class="compartment">
                            <a href="/item/{{$product->id}}" class="item">
                                <img src="{{asset($product->image)}}" alt="商品画像" width="100%">
                                <p>{{$product->name}}</p>
                            </a>
                        </li>
                @endforeach
        </ul>
    </div>
</div>
@endsection

