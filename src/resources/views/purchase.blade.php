@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/app_wide.css')}}">
@livewireStyles

@section('content')
<div>
    <livewire:bind productId="{{$product->id}}" text="Hello">
    @livewireScripts
</div>
@endsection