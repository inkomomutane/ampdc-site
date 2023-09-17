@extends('errors.layout')
@section('title','Página não encontrada')
@section('message','Página não encontrada')
@section('code','404')
@section('image','404.svg')
@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/404.svg')}}" alt="Página não encontrada" class="h-72 self-center mx-auto">
@endsection
