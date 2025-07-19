@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product_detail.css')}}">
@endsection

@section('content')
<div class="total-container">
    <div class="left-container">
        <div><img src="{{asset($product->image)}}" alt="商品画像" width="400px"></div>
    </div>
    <div class="right-container">
        <div>
            <div class="title-name"><p>{{$product->name}}</p></div>
            <div class="title-price"><p>{{$product->brand}}</p></div>
            <div><p class="subtitle">&yen{{$product->price}}</p></div>
            <div class="btn-group">
                <form action="/favorite/{{$product->id}}" method="post">
                @csrf
                    <div>\
                        <button type="submit">
                            <img src="{{asset($imageUrl)}}" alt="いいね" width="30px" height="30px">
                        </button>
                        <p style="text-align: center;">{{$favoriteCount}}</p>
                        <input type="hidden" name="isPushed" value="{{$isPushed}}">
                    </div>
                </form>
                <div>
                    <div>
                        <img src="{{asset('img/comment_icon.png')}}" alt="いいね" width="30px" height="30px">
                    </div>
                    <p style="text-align: center;">{{$comments->count()}}</p>
                </div>
            </div>
            <form action="/purchase/{{$product->id}}" method="get">
                <button type="submit" class="btn">購入手続きへ</button>
            </form>
        </div>
        <div>
            <div class="subtitle"><p>商品説明</p></div>
            <div>{{$product->description}}</div>
        </div>
        <div>
            <div class="subtitle">商品の情報</div>
            <div class="category">
                <div class="item-label">カテゴリー</div>
                <div class="category-content" style="display: flex;">
                    @foreach ($categories as $category)
                    <input type="checkbox" id="category" class="checkbox" value="{{$category->id}}" {{in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'checked' : ''}} name="category_product[]">
                    <label for="category" class="category-label">{{$category->content}}</label>                    
                    @endforeach
                </div>
            </div>
            <div class="condition">
                <div class="item-label">商品の状態</div>
                <div class="condition-content">{{$product->condition}}</div>
            </div>
        </div>
        <div>
            <div class="subtitle">コメント（{{$comments->count()}}）</div>
            @foreach ($comments as $comment)
                <div class="comment-container">
                    <div class="comment-header">
                        @isset($comment->user->profile->image)
                        <div class="profile-image-wrapper">
                            <img src="{{asset($comment->user->profile->image)}}" alt="プロフィール画像" width="50px">
                        </div>
                        @endisset
                        <div>{{$comment->user->name}}</div>
                    </div>
                    <div style="background-color: #E6E6E6">{{$comment->content}}</div>
                </div>
            @endforeach
            
        </div>
        <form action="/comment/{{$product->id}}" method="post">
        @csrf
            <div>
                <p>商品へのコメント</p>
            </div>
            <textarea name="content" cols="80" rows="8" style="border:1px solid #000"></textarea>
            @error('content')
                <div><p class="error-message">{{$errors->first('content')}}</p></div>
            @enderror
            <button type="submit" class="btn">コメントを送信する</button>
        </form>
    </div>
</div>
@endsection