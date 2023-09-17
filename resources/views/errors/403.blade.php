@extends('errors.layout')
@section('title','Acesso proibido')
@section('message','Acesso proibido')
@section('code','403')
@section('image','403.svg')

@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/403.svg')}}" alt="Acesso proibido" class="h-72 self-center mx-auto">
@endsection
