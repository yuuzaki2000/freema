@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('link')
<form action="/logout" method="post">
@csrf
    <button><p style="color:#fff">ログアウト</p></button>
</form>
    
@endsection

