@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/mypage.css')}}">

@section('middle')

@section('title')

@section('content')
<div>
    <div class="middle-upper">
        <div>
            <img src="" alt="">
        </div>
        <h2>ユーザー名</h2>
        <a href="/mypage/profile">プロフィールを編集</a>
    </div>
    <div class="middle-bottom">
        <form action="/mypage" method="get">
            <input type="hidden" name="page" value="sell">
            <button type="submit">出品した商品</button>
        </form>
    </div>
</div>
@endsection