
@extends('errors.layout')
@section('title','Serviço indisponível')
@section('message','Serviço indisponível')
@section('code','503')
@section('image','503.svg')
@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/503.svg')}}" alt="Serviço indisponível" class="h-72 self-center mx-auto">
@endsection
