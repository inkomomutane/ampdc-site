@extends('layouts/base')
@section('seo')
{!! seo($SEOData) !!}
@endsection
@section('content')
<section class="bg-gradient-to-b from-amber-100 via-white bg-gray-50">
    <div class=" max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-20">
        <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
            <div class="grid  gap-4 w-full " data-aos="fade-up">
                <div class="md:flex w-full  relative">
                    <div class="md:basis-1/4">
                        <img class=" inset-0 w-fit h-full object-cover object-top" src="{{ asset('storage') }}/{{ $area->image }}" alt="{{ $area->title   }}">
                    </div>
                    <div class="md:basis-3/4 text-base my-6 p-6  text-justify bg-white  tracking-normal space-y-4">
                        <strong class="text-xl md:text-3xl"> {{ $area?->title  ?? '' }} </strong>
                        <br>
                        <p>
                            {{ $area?->description ?? '' }}
                        </p>

                    </div>
                </div>
                <article class="prose max-w-none prose-blockquote:border-primary-400 prose-blockquote:bg-primary-50">
                    {!! $area?->content ?? '' !!}
                </article>
            </div>
        </div>
    </div>
</section>
@include('partials/partiners')
@endsection
