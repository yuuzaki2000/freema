@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{asset('css/member_register.css')}}">
@endsection

@section('title')
会員登録
@endsection

@section('content')
    <form class="inner" action="/register" method="post">
    @csrf
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
            <button type="submit" class="btn">登録する</button>
            <div class="login-text-container"><a href="/login" class="login-text">ログインはこちら</a></div>
        </div>
    </form>
@endsection