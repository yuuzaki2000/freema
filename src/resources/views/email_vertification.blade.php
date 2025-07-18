@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/email_vertification.css')}}">
    
@section('content')
<div class="content">
    <div>
        <div>
            <p>登録していただいたメールアドレスに認証メールを送付しました。</p>
        </div>
        <div>
            <p>メール認証を完了してください。</p>
        </div>
    </div>
    <div>
        <a href="https://mailtrap.io/inboxes/3854519/messages" class="verification">認証はこちらから</a>
        <form action="{{route('verification.send')}}" method="POST">
            @csrf
            <button type="submit" class="resend">認証メールを再送する</button>
        </form>
    </div>
</div>
    
@endsection

 