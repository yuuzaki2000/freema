@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/email_vertification.css')}}">
    
@section('content')
<div>
    <p>Email Vertification</p>
    <div>
        <p>登録していただいたメールアドレスに認証メールを送付しました。</p>
        <p>メール認証を完了してください。</p>
    </div>
    <div>
        <a href="https://mailtrap.io/inboxes/3822474/messages" style="display:block; width:100px; height:20px;">認証はこちらから</a>
        <a href="">認証メールを再送する</a>
    </div>
</div>
    
@endsection

 