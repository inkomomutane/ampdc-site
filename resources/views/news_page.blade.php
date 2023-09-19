@extends('layouts/base')

@section('title', 'Actividade — ' . $article?->title ?? '')
@section('content')
    <section class="bg-gradient-to-b from-amber-100 via-white bg-gray-50">
        <div class=" max-w-screen-xl md:px-4 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-16 lg:px-20">
            <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
                <div class="grid  gap-4 w-full " data-aos="fade-up">
                    <div class="grid w-full h-fit relative">
                        <article class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex  items-end text-white">
                            <img class="absolute inset-0 w-full h-full object-cover object-top"
                                src="{{ asset('storage') }}/{{ $article->cover ?? '' }}"
                                alt="{{ $article->title ?? 'Sumburero event' }}">
                            <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                            <div class="relative  p-6 w-full">
                                <div class="group flex flex-row justify-start rounded-t w-full
                              "
                                    data-aos="fade-up">
                                    <div
                                        class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                        <span class="text-sm font-bold capitalize">

                                            {{ $article->month }}
                                        </span>
                                        <span class="text-xl font-extrabold">
                                            {{ $article->day }}
                                        </span>
                                    </div>
                                    <div class="grid content-center mx-3 w-full space-y-1">
                                        <div class="inline-flex flex-col align-middle space-y-2">

                                            <span class="inline-flex flex-row align-middle ">
                                                <span class="inline-block align-middle mr-2">
                                                    <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11.536 3.464a5 5 0 010 7.072L8 14.07l-3.536-3.535a5 5 0 117.072-7.072v.001zm1.06 8.132a6.5 6.5 0 10-9.192 0l3.535 3.536a1.5 1.5 0 002.122 0l3.535-3.536zM8 9a2 2 0 100-4 2 2 0 000 4z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="inline-flex flex-row align-middle text-sm ">{{ $article->location }}</span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between w-full">
                                            <h2 class=" text-base font-semibold   capitalize tracking-wide">
                                                {{ $article->title }}
                                            </h2>
                                        </div>
                                        <div
                                            class="flex justify-between w-fit bg-amber-400 p-1 px-2 capitalize text-xs text-gray-900 font-semibold">
                                            <span>{{ $article->category }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="text-base my-6 p-6  text-justify bg-zinc-100  tracking-normal space-y-4">
                            {!! $article->short_description ?? '' !!}
                        </div>
                    </div>

                    @if (is_array($article?->sections))
                        @foreach ($article?->sections as $section)
                            <div class="grid sm:grid-cols-12 pb-8 sm:pb-16 ">
                                @if (($loop->index + 1) % 2 == 0)
                                    <div
                                        class="mr-auto place-self-center sm:col-span-7 col-start-1 tracking-tight p-8 pb-0 ">
                                        <h1 class="max-w-2xl mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none
                             dark:text-white capitalize "
                                            data-aos="fade-up" >— {{ $section['title'] }}</h1>

                                        <div class=" grid  gap-2">

                                            <div class="" data-aos="fade-up" >
                                                <div class=" max-w-2xl   font-light text-gray-800 lg:mb-2 text-base ">
                                                    {!! $section['content'] !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex lg:mt-0 sm:col-span-5 col-start-7">
                                        <img class="col-span-2 row-span-2  h-full object-cover object-top rounded md:rounded-tr-[3rem] md:rounded-bl-[3rem]"
                                            src="{{ asset('storage') }}/{{ $section['image'] }}"
                                            alt="{{ $section['title'] }}" data-aos="fade-up" >

                                    </div>
                                @else
                                    <div class="flex lg:mt-0 sm:col-span-5 col-start-7">
                                        <img class="col-span-2 row-span-2  h-full object-cover object-top rounded md:rounded-tr-[3rem] md:rounded-bl-[3rem]"
                                            src="{{ asset('storage') }}/{{ $section['image'] }}" alt="mockup"
                                            data-aos="fade-up" >

                                    </div>
                                    <div
                                        class="mr-auto place-self-center sm:col-span-7 col-start-1 tracking-tight p-8 pb-0 ">
                                        <h1 class="max-w-2xl mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none
                             dark:text-white capitalize "
                                            data-aos="fade-up" >— {{ $section['title'] }}</h1>

                                        <div class=" grid  gap-2">

                                            <div class="" data-aos="fade-up" >
                                                <div class=" max-w-2xl   font-light text-gray-800 lg:mb-2 text-base ">
                                                    {!! $section['content'] !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif


                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="relative ">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ Vite::asset('resources/images/hero.jpg') }}"
            alt="mockup">
        <div class="absolute   inset-0 bg-black/90"></div>
        <div class="max-w-screen-xl px-8 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-20">
            @if (is_array($article?->gallery))
                <div class="w-full">
                    <h2 class="mb-8 text-xl sm:text-4xl tracking-tight font-extrabold text-white dark:text-white text-start aos-init aos-animate"
                        data-aos="fade-up">
                        — Fotos da actividade </h2>
                    <div class="grid grid-cols-2 sm:grid-cols-4 content-center mx-3 w-full gap-4 h-64">

                        @foreach ($article?->gallery as $image)
                            <img class="w-full h-full  object-cover object-top rounded"
                                src="{{ asset('storage') }}/{{ $image }}" alt="{{ $section['title'] }}"
                                data-aos="fade-up" >
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
    @include('partials/partiners')
@endsection
