@extends('layouts/base')

@section('title', 'Evento — ' . $event?->title ?? '')
@section('content')
    <section class="bg-gradient-to-b from-amber-100 via-white bg-gray-50">
        <div class=" max-w-screen-xl md:px-4 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-16 lg:px-20">
            <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
                <div class="grid  gap-4 w-full " data-aos="fade-up">
                    <div class="grid w-full h-fit relative">
                        <article
                            class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex  items-end text-white">
                            <img class="absolute inset-0 w-full h-full object-cover object-top"
                                src="{{ asset('storage') }}/{{ $event->cover ?? '' }}"
                                alt="{{ $event->title ?? 'Sumburero event' }}">
                            <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                            <div class="relative  p-6 w-full">
                                <div class="group flex flex-row justify-start rounded-t w-full
                           "
                                    data-aos="fade-up">
                                    <div
                                        class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                        <span class="text-sm font-bold capitalize">

                                            {{ $event->month }}
                                        </span>
                                        <span class="text-xl font-extrabold">
                                            {{ $event->day }}
                                        </span>
                                        <span class="text-xs font-base">
                                            {{ $event->start_time }}
                                        </span>

                                    </div>
                                    <div class="grid content-center mx-3 w-full space-y-1">
                                        <div class="inline-flex flex-col align-middle space-y-2">
                                            <span class="inline-flex flex-row align-middle ">
                                                <span class="inline-block align-middle mr-2">
                                                    <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.5 4.75a.75.75 0 00-1.5 0v3.5a.75.75 0 00.471.696l2.5 1a.75.75 0 00.557-1.392L8.5 7.742V4.75z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="inline-flex flex-row align-middle text-sm  first-letter:uppercase">Começa
                                                    {{ $event->start_date_info }}</span>
                                            </span>
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
                                                    class="inline-flex flex-row align-middle text-sm ">{{ $event->location }}</span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between w-full">
                                            <h2 class=" text-base font-semibold   capitalize tracking-wide">
                                                {{ $event->title }}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="text-base mb-6 p-6  text-justify bg-zinc-100  tracking-normal space-y-4">
                            {!! $event->event_description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-900">
        <div class="grid max-w-screen-xl  px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:px-32">

            <div class="flex flex-col mr-auto place-self-center  tracking-tight py-4 text-white w-full"
                data-aos="fade-up">
                <h1 class="max-w-2xl mb-4  text-sm font-extrabold tracking-tight leading-none first-letter:uppercase ">—
                    Outros eventos</h1>
                @if ($events->count() > 0)
                    <div class=" grid  gap-4 py-6 w-full">
                        @foreach ($events as $event)
                            <a href="{{ route('event', ['slug' => $event->slug]) }}">
                                <article
                                    class="group flex flex-row justify-start rounded-t w-full
                                hover:cursor-pointer hover:bg-white/5
                                      border-y border-y-amber-200/20
                                   "
                                    data-aos="fade-up">
                                    <div
                                        class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                        <span class="text-sm font-bold">

                                            {{ $event->month }}
                                        </span>
                                        <span class="text-xl font-extrabold">
                                            {{ $event->day }}
                                        </span>
                                    </div>
                                    <div class="grid content-center mx-3 w-full">
                                        <div class="inline-flex align-middle ">
                                            <span class="inline-flex flex-row align-middle ">
                                                <span class="inline-block align-middle mr-2">
                                                    <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.5 4.75a.75.75 0 00-1.5 0v3.5a.75.75 0 00.471.696l2.5 1a.75.75 0 00.557-1.392L8.5 7.742V4.75z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="inline-flex flex-row align-middle text-sm">
                                                    {{ $event->start_time }} -
                                                    {{ $event->end_time }}</span>
                                            </span>
                                            <span class="inline-flex flex-row align-middle ">
                                                <span class="inline-block align-middle mx-2">
                                                    <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11.536 3.464a5 5 0 010 7.072L8 14.07l-3.536-3.535a5 5 0 117.072-7.072v.001zm1.06 8.132a6.5 6.5 0 10-9.192 0l3.535 3.536a1.5 1.5 0 002.122 0l3.535-3.536zM8 9a2 2 0 100-4 2 2 0 000 4z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="inline-flex flex-row align-middle text-sm  line-clamp-1">{{ $event->location }}</span>
                                            </span>
                                        </div>
                                        <div class="flex  justify-between r my-1 w-full">
                                            <h2 class=" text-lg font-medium  line-clamp-1 capitalize mr-8 tracking-wide">
                                                {{ $event->title }} </h2>
                                            <span
                                                class="group-hover:text-amber-500 flex min-w-fit flex-row self-center items-center  font-medium text-center right-0 pr-4 text-sm ">
                                                Ler mais
                                                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        @endforeach
                    </div>
                @else
                    <span class="text-xs p-4 bg-amber-50/5">
                        — Sem eventos por mostrar
                    </span>
                @endif

            </div>
        </div>
    </section>

    @include('partials/partiners')
@endsection
