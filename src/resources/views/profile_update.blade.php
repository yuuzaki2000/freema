@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_register.css')}}">

@section('title')
プロフィール編集

@section('content')
    <form action="/upload/profile" method="POST" enctype="multipart/form-data">
    @csrf
        <div>
            <img src="{{$profile['image']}}" alt="サンプル画像" width="100px" height="100px">
        </div>
        <input type="file" name="file">
        <button type="submit">アップロード</button>
    </form>
    <form class="inner" action="/mypage/profile" method="POST">
    @method('PATCH')
    @csrf
        <div class="content">
            <div>
                <input type="hidden" name="image" value="{{$profile['image']}}">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="hidden" name="user_id" value="{{$userInfo->id}}">
                <input class="input" type="text" name="" value="{{$userInfo->name}}">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value="{{$profile['post_code']}}">
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value="{{$profile['address']}}">
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value="{{$profile['building']}}">
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    </form>
@endsection