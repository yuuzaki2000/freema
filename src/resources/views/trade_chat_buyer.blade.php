@extends('layouts.trade')

@section('css')
<link rel="stylesheet" href="{{asset('css/trade_chat_buyer.css')}}">
@endsection

@section('total-container')
<div class="total-container">
    <div class="side-bar">その他の取引</div>
    <div class="center">
        <div class="center-container">
            <div class="title-container">
                <a href="#modal">モーダルを表示</a>
                <form action="#modal" method="GET">
                    @csrf
                    <button type="submit">モーダルを表示</button>
                </form>
            </div>
            <div class="product-info-container"></div>
            <div class="message-container"></div>
        </div>
        <div class="modal" id="modal">
            <a href="#!" class="modal-overlay"></a>
            <div class="modal__inner">
                <div class="modal__content">
                    モーダルの中身
                    <form action="/" method="GET">
                        @csrf
                        <button type="submit">トップページへ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

