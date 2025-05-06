@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_register.css')}}">

@section('link')

@section('content')
    <h2 class="inner-header">プロフィール設定</h2>
    <div>
        <img src="{{asset($imageFilePath)}}" alt="サンプル画像" width="100px" height="100px">
    </div>
    <form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="file" name="file">
        <button type="submit">アップロード</button>
    </form>
    <form class="inner" action="/mypage/profile" method="post">
    @csrf
        
        <div class="content">
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name" value="{{$userInfo->name}}">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="email">
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="password">
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="password_confirmation">
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    </form>
@endsection