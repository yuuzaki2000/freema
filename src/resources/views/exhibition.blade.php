@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product_register.css')}}">
@livewireStyles

@section('title')
商品の出品

@section('content')
<div>
    <livewire:chain>
    @livewireScripts
</div>
@endsection