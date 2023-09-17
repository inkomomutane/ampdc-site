
@extends('errors.layout')
@section('title','Muitos acessos simultâneos')
@section('message','Muitos acessos simultâneos')
@section('code','429')
@section('image','503.svg')
@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/429.svg')}}" alt="Muitos acessos simultâneos" class="h-72 self-center mx-auto">
@endsection
