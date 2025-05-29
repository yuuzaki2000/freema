@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_register.css')}}">

@section('title')
プロフィール設定

@section('content')
    <form action="/upload/profile" method="POST" enctype="multipart/form-data">
    @csrf
        <div>
            <img src="{{asset('img/onepiece06_chopper.png'){{-- {{$profile->image}}--}}}}" alt="サンプル画像" width="100px" height="100px">
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
                <input class="input" type="hidden" name="user_id" value="{{$userInfo->id}}">
                <input class="input" type="text" name="" value="{{$userInfo->name}}">
            </div>
            @if (empty($profile) == true)
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
            @else
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value={{$profile->post_code}}>
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value={{$profile->address}}>
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value={{$profile->building}}>
            </div>
            @endif
            <button type="submit" class="btn">更新する</button>
        </div>
    </form>
@endsection