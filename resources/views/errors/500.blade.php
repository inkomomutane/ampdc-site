
@extends('errors.layout')
@section('title','Erro do servidor')
@section('message','Erro do servidor')
@section('code','500')
@section('image','503.svg')
@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/500.svg')}}" alt="Erro do servidor" class="h-72 self-center mx-auto">
@endsection
