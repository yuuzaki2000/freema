@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/profile_update.css')}}">
@livewireStyles

@section('content')
<div>
    <livewire:connect userId="{{$userId}}">
    @livewireScripts
</div>
@endsection