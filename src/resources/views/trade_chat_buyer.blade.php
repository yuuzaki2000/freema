@extends('layouts.trade')

@section('css')
<link rel="stylesheet" href="{{asset('css/trade_chat_buyer.css')}}">
@endsection

@section('total-container')
<div class="total-container">
    <div class="side-bar">その他の取引</div>
    <div class="center">
        <div class="center-container">
            <div class="title-bar-container">
                <div>
                    <img src="" alt="">
                </div>
                <h2>「」さんとの取引画面</h2>
                <form action="/products/{{$item_id}}/trade" method="POST">
                    @csrf
                    <button type="submit">取引を完了する</button>
                </form>
            </div>
            <div class="product-info-container"></div>
            <div class="message-container">
                <div></div>
                <form action="/products/{{$item_id}}/trades/messages" method="POST">
                @csrf
                    <input type="text" name="content">
                    <input type="file" name="image">
                    <button type="submit">メール送信</button>
                </form>
                {{--
                @foreach($trade->messages as $msg){
                <div>

                </div>
                @endforeach
                }
                --}}
            </div>
        </div>
        <div class="modal" id="modal">
            <a href="#!" class="modal-overlay"></a>
            <div class="modal__inner">
                <div class="modal__content">
                    <form action="/star" method="POST">
                    {{--
                        <form action="/star/{{$trade->seller->id}}" method="POST">
                    --}}
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

