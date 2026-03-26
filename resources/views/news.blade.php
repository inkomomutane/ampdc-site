@extends('layouts/base')

@section('seo')
    {!! seo($SEOData) !!}
@endsection

@section('content')
<section class="bg-gradient-to-b from-primary-200 via-primary-100 to-primary-200">
    <div class="max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-16">
        <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">

            {{-- 🔹 Destaque --}}
            <div class="grid sm:grid-cols-1 gap-4 w-full" data-aos="fade-up">
                @if ($evento)
                <div class="sm:col-span-1 min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] grid w-full relative">
                    <a href="{{ route('news.page', ['slug' => $evento['slug']]) }}">
                        <evento class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex items-end text-white">

                            <img loading="lazy"
                                 class="absolute inset-0 w-full h-full object-cover object-top"
                                 src="{{ $evento['cover_image'] ?? asset('images/default.jpg') }}"
                                 alt="{{ $evento['title'] ?? 'AMPDC' }}">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>

                            <div class="relative p-6 w-full">
                                <div class="flex flex-row justify-start rounded-t w-full">
                                    
                                    {{-- Data --}}
                                    <div class="w-fit p-4 px-6 bg-amber-400 flex flex-col text-black items-center">
                                        <span class="text-sm font-bold capitalize">
                                            {{ $evento['month'] ?? '' }}
                                        </span>
                                        <span class="text-xl font-extrabold">
                                            {{ $evento['day'] ?? '' }}
                                        </span>
                                    </div>

                                    {{-- Conteúdo --}}
                                    <div class="grid content-center mx-3 w-full space-y-1">
                                        <span class="inline-flex text-sm">
                                            {{ $evento['location'] ?? '' }}
                                        </span>

                                        <h2 class="text-base font-semibold capitalize tracking-wide">
                                            {{ $evento['title'] ?? '' }}
                                        </h2>

                                        <div class="w-fit bg-primary-600 p-1 px-2 text-xs text-white font-semibold">
                                            {{ $evento['category'] ?? '' }}
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </evento>
                    </a>
                </div>
                @endif
            </div>

            {{-- 🔹 Lista --}}
            <div class="grid md:grid-cols-3 gap-x-4 w-full">
                <div class="col-span-2 grid h-fit w-full">

                    <h1 class="w-full mt-8 mb-4 text-primary-600 text-sm font-extrabold uppercase">
                        — Actividades recentes
                    </h1>

                    @foreach ($eventos as $eventoItem)
                        <a href="{{ route('news.page', ['slug' => $eventoItem['slug']]) }}"
                           class="md:mr-4 mb-4 hover:scale-[1.01] transition">

                            <evento class="grid sm:grid-cols-3 gap-4 bg-white hover:bg-white/95">

                                {{-- Imagem --}}
                                <div class="sm:col-span-1 h-48 sm:h-auto relative">
                                    <img loading="lazy"
                                         class="absolute inset-0 w-full h-full object-cover"
                                         src="{{ $eventoItem['cover_image'] ?? asset('images/default.jpg') }}"
                                         alt="{{ $eventoItem['title'] ?? 'AMPDC' }}">

                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/10"></div>
                                </div>

                                {{-- Conteúdo --}}
                                <div class="sm:col-span-2 grid content-center space-y-2 p-6">

                                    <h2 class="text-lg font-bold text-primary-600 capitalize line-clamp-1">
                                        {{ $eventoItem['title'] ?? '' }}
                                    </h2>

                                    <p class="line-clamp-3 text-[13px] text-gray-800/80">
                                        {{ $eventoItem['short_description'] ?? '' }}
                                    </p>

                                    <time class="w-fit text-xs text-white font-semibold bg-primary-500 p-1 px-2">
                                        {{ $eventoItem['day'] ?? '' }}, {{ $eventoItem['month'] ?? '' }} {{ $eventoItem['year'] ?? '' }}
                                    </time>

                                </div>

                            </evento>
                        </a>
                    @endforeach

                </div>

                {{-- 🔹 Sidebar --}}
                <div class="col-span-1 hidden md:grid h-fit sticky top-[72px] z-30">
                    <h1 class="mt-8 mb-4 text-primary-600 text-sm font-extrabold uppercase">
                        — Siga nos:
                    </h1>

                    <div class="bg-white/60 p-4">
                        <a href="https://www.facebook.com/people/Associa%C3%A7%C3%A3o-de-Mulheres-para-o-Desenvolvimento-Comunit%C3%A1rio/100082765716863/" target="_blank">
                            <div class="py-3 border-b text-sm hover:text-primary-600">
                                Facebook
                            </div>
                        </a>
                        <a href="https://www.instagram.com/ampdc01" target="_blank">
                            <div class="py-3 border-b text-sm hover:text-primary-600">
                                Instagram
                            </div>
                        </a>

                        <a href="https://youtube.com/@ampdcassociacao2017" target="_blank">
                            <div class="pt-3 text-sm hover:text-primary-600">
                                YouTube
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@include('partials/partiners')
@endsection