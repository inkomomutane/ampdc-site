@extends('errors.layout')
@section('title','Acesso não autorizado')
@section('message','Acesso não autorizado')
@section('code','401')
@section('image','401.svg')
@section('svg')
<img src="{{Vite::asset('resources/errors/svgs/401.svg')}}" alt="Acesso não autorizado" class="h-72 self-center mx-auto">
@endsection
