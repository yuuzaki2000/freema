@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/app_wide.css')}}">
@livewireStyles

@section('content')
<div>
    <livewire:purchase-modal productId="{{$product->id}}">
    @livewireScripts
</div>
@endsection