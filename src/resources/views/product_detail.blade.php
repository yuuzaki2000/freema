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
            <div><p class="subtitle">&yen{{$product->price}}</p></div>
            <div class="btn-group">
                <form action="/favorite/{{$product->id}}" method="post">
                @csrf
                    <div>
                        <button type="submit">
                            <img src="{{asset('img/star_icon.png')}}" alt="いいね" width="30px" height="30px">
                        </button>
                        <p style="text-align: center;">3</p>
                    </div>
                </form>
                <form action="" method="post">
                @csrf
                    <div>
                        <button type="submit">
                            <img src="{{asset('img/comment_icon.png')}}" alt="いいね" width="30px" height="30px">
                        </button>
                        <p style="text-align: center;">1</p>
                    </div>
                </form>
            </div>
            <form action="/purchase/{{$product->id}}" method="get">
                <button type="submit" class="btn">購入手続きへ</button>
            </form>
        </div>
        <div>
            <div class="subtitle"><p>商品説明</p></div>
            <div><p>カラー：</p></div>
            <div><p>新品</p></div>
            <div><p>商品の状態は良好です。傷もありません。</p></div>
            <div><p>購入後、即発送いたします。</p></div>
        </div>
        <div>
            <div class="subtitle">商品の情報</div>
            <div>
                <div class="item-label">カテゴリー</div>
                <div class="item-content">
                    @foreach ($categories as $category)
                    <input type="checkbox" id="category" value="{{$category->id}}" {{in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'checked' : ''}} name="category_product[]">
                    <label for="category">{{$category->content}}</label>                    
                    @endforeach
                </div>
            </div>
            <div>
                <div class="item-label">商品の状態</div>
                <div class="item-content"></div>
            </div>
        </div>
        <div>
            <div class="subtitle">コメント（１）</div>
            <div style="display: flex; flex-direction: row;">
                <div>
                    <img src="" alt="プロフィール画像">
                </div>
                <div>admin</div>
            </div>
            <div style="background-color: #E6E6E6">こちらにコメントが入ります</div>
        </div>
        <form action="/comment/{{$product->id}}" method="post">
        @csrf
            <div>
                <p>商品へのコメント</p>
            </div>
            <textarea name="content" cols="80" rows="8" style="border:1px solid #000"></textarea>
            <button type="submit" class="btn">コメントを送信する</button>
        </form>
    </div>
</div>
@endsection