@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('link')
<form action="">
    <input type="text" name="keyword">
</form>
<form action="/logout" method="post">
@csrf
    <button>
        <p style="color:#fff">ログアウト</p>
    </button>
</form>


@section('content')
<form action="/mypage/profile" method="get">
@csrf
    <button>
        <p>マイページ</p>
    </button>
</form>
<div class="container">
    <ul class="group">
        <li class="compartment">
            <div>
                <img src="{{asset('storage/product_img/product_image_sample.png')}}" alt="商品画像">
                <p>商品名</p>
            </div>
        </li>
        <li class="compartment">
            <div>
                <img src="{{asset('storage/product_img/product_image_sample.png')}}" alt="商品画像">
                <p>商品名</p>
            </div>
        </li>
        <li class="compartment">
            <div>
                <img src="{{asset('storage/product_img/product_image_sample.png')}}" alt="商品画像">
                <p>商品名</p>
            </div>
        </li>
        <li class="compartment">
            <div>
                <img src="{{asset('storage/product_img/product_image_sample.png')}}" alt="商品画像">
                <p>商品名</p>
            </div>
        </li>
        <li class="compartment">
            <div>
                <img src="{{asset('storage/product_img/product_image_sample.png')}}" alt="商品画像">
                <p>商品名</p>
            </div>
        </li>
        <li class="compartment">
            <div>
                <img src="{{asset('storage/product_img/product_image_sample.png')}}" alt="商品画像">
                <p>商品名</p>
            </div>
        </li>
    </ul>
</div>
    
@endsection
    
@endsection

