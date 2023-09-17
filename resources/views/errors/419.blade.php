
@extends('errors.layout')
@section('title','Página expirada')
@section('message','Página expirada')
@section('code','419')
@section('image','404.svg')
@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/419.svg')}}" alt="Página expirada" class="h-72 self-center mx-auto">
@endsection
