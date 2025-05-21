@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_register.css')}}">

@section('content')
    <h2 class="inner-header">プロフィール設定</h2>
    <form action="/upload/profile" method="POST" enctype="multipart/form-data">
    @csrf
        <div>
            <img src="{{asset($imageFilePath)}}" alt="サンプル画像" width="100px" height="100px">
        </div>
        <input type="file" name="file">
        <button type="submit">アップロード</button>
    </form>
    <form class="inner" action="/mypage/profile" method="post">
    @csrf
        <div class="content">
            <div>
                <input type="hidden" name="image" value="{{$imageFilePath}}">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="user_id" value="{{$userInfo->id}}">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value={{old('post_code')}}>
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value={{old('address')}}>
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value={{old('building')}}>
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    </form>
@endsection