@extends('layouts.app_slim')

@section('css')
<link rel="stylesheet" href="{{asset('css/listing.css')}}">
@livewireStyles

@section('content')
<div>
    <livewire:listing-modal>
    @livewireScripts
</div>    
@endsection