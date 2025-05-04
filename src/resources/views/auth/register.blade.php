@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/member_register.css')}}">

@section('link')

@section('content')
    <form class="inner" action="/register" method="post">
    @csrf
        <h2 class="inner-header">会員登録</h2>
        <div class="content">
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name">
            </div>
            <div>
                @error('name')
                    <p>{{$errors->first('name')}}</p>
                @enderror
            </div>
            <div>
                <p>メールアドレス</p>
                <input class="input" type="text" name="email">
            </div>
            <div>
                @error('email')
                    <p>{{$errors->first('email')}}</p>
                @enderror
            </div>
            <div>
                <p>パスワード</p>
                <input class="input" type="password" name="password">
            </div>
            <div>
                @error('password')
                    <p>{{$errors->first('password')}}</p>
                @enderror
            </div>
            <div>
                <p>確認用パスワード</p>
                <input class="input" type="password" name="password_confirmation">
            </div>
            <div>
                @error('password_confirmation')
                    <p>{{$errors->first('password_confirmation')}}</p>
                @enderror
            </div>
            <button type="submit" class="btn">登録する</button>
            <div><a href="/login" class="login-text">ログインはこちら</a></div>
        </div>
    </form>
@endsection