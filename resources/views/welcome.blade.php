@extends('layouts/base')
@section('title','Sumburero - Grupo técnico de proteção social')
@section('seo')
{!! seo($SEOData) !!}
@endsection

@section('content')
    @include('partials/hero')
    @include('partials/intervenction_areas')
    <!-- @include('partials/mission') -->
    @include('partials/about')
    @include('partials/articles')
    @include('partials/events')
    @include('partials/success_stories')
    @include('partials/partiners')
@endsection
