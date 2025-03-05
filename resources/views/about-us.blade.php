@extends('layouts/base')
@section('seo')
{!! seo($SEOData) !!}
@endsection
@section('content')
<section class="bg-gradient-to-b from-amber-100 via-white bg-gray-50">
    <div class=" max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-20">
        <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
            <div class="grid  gap-4 w-full " data-aos="fade-up">
                <div class="grid w-full h-fit relative">
                    <article class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex  items-end text-white">
                        <img class="absolute inset-0 w-full h-full object-cover object-top"
                             src="{{ asset('storage') }}/{{ $about->cover_about_us ?? '' }}"

                             alt="AMPDC">
                        <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                        <div class="relative  p-6 w-full">
                            <div class="group flex flex-row justify-start rounded-t w-full
                           " data-aos="fade-up">
                                <div class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                    <span class="text-sm font-bold capitalize">
                                        {{ $about->title_about_us ?? '' }}
                                    </span>
                                </div>
                            </div>
                            <div class="grid content-center mr-3 w-full space-y-1">

                                <div class="flex justify-between w-full">
                                    <h2 class=" text-base font-semibold   capitalize tracking-wide mt-3">

                                    </h2>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="text-base my-6 p-6  text-justify bg-white  tracking-normal space-y-4 prose max-w-none">
                        {!! $about->content_about_us ?? '' !!}
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials/partiners')
@endsection
