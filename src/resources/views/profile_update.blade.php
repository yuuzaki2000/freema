@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_update.css')}}">
@livewireStyles
@endsection

@section('title')
<div class="title">
    <p>プロフィール設定</p>
</div>
@endsection

@section('content')
<div>
    <livewire:profile-modal userId="{{$userId}}" profileId="{{$profileId}}">
    @livewireScripts
</div>
@endsection