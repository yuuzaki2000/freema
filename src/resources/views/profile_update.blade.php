@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_update.css')}}">

@section('content')
    <form action="/upload/profile" method="POST" enctype="multipart/form-data">
    @csrf
        @if (isset($profile))
        <div>
            <img src="{{asset($profile->image)}}" alt="サンプル画像" width="100px" height="100px">
        </div>
        @endif
        <input type="file" name="file">
        <button type="submit">アップロード</button>
    </form>
    <form class="inner" action="/mypage/profile" method="post">
    @csrf
    @if (empty($profile) == true)
        <div class="content">
            <div>
                <input type="hidden" name="image" value="{{$imageFilePath}}">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="hidden" name="user_id" value="{{$user->id}}">
                <input class="input" type="text" name="user_name" value="{{$user->name}}">
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
    @else
        @method('PATCH')
        <div class="content">
            <div>
                <input type="hidden" name="image" value="{{$imageFilePath}}">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="hidden" name="user_id" value="{{$user->id}}">
                <input class="input" type="text" name="" value="{{$user->name}}">
            </div>
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
            <button type="submit" class="btn">更新する</button>
        </div>
    @endif
    </form>
@endsection