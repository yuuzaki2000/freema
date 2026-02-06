@extends('layouts.trade')

@section('css')
<link rel="stylesheet" href="{{asset('css/trade_chat.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('total-container')
<div class="total-container">
    <div class="side-bar"><p class="side-bar-title">その他の取引</p></div>
    <div class="center">
        <div class="center-container">
            <div class="title-bar-container">
                <div>
                    <div>
                        <img src="{{asset($product->trade->buyer->profile->image)}}" alt="ユーザー画像">
                    </div>
                    <h2>「{{$product->trade->buyer->name}}」さんとの取引画面</h2>
                </div>
            </div>
            <div class="product-info-container">
                <div style="height:130px;width:130px;">
                    <img src="{{asset($product->image)}}" alt="商品画像" style="width:100%;">
                </div>
                <div class="product-info">
                    <div class="product-name">{{$product->name}}</div>
                    <div class="product-price">{{$product->price}}円</div>
                </div>
            </div>
            <div class="message-container">
                <div></div>
                <form action="/products/{{$product->id}}/trades/messages" method="POST">
                @csrf
                    <input type="text" name="content">
                    <label class="file-label">
                        画像を追加
                        <input type="file" name="file" class="file-input">
                    </label>
                    <input type="hidden" name="page" value="seller">
                    <button type="submit">メール送信<i class="fa-regular fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="modal" id="modal">
            <a href="#!" class="modal-overlay"></a>
            <div class="modal__inner">
                <div class="modal__content">
                    <form action="/star" method="POST">
                        @csrf
                        <select name="star_point">
                            <option value="">星の数を選択</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="submit">送信</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

