@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{asset('css/member_login.css')}}">

@section('title')
ログイン
    
@endsection

@section('content')
    <form class="inner" action="/login" method="post">
    @csrf
        <div class="content">
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
            <button type="submit" class="btn">ログインする</button>
            <div class="register-text-container"><a href="/register" class="register-text">会員登録はこちら</a></div>
        </div>
    </form>
@endsection