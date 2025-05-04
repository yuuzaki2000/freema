@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_register.css')}}">

@section('link')

@section('content')
    <form class="inner" action="/mypage/profile" method="post">
    @csrf
        <h2 class="inner-header">プロフィール設定</h2>
        <div class="content">
            <div>画像を選択する</div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name">
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