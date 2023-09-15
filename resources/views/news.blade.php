@extends('layouts/base')
@section('content')
    <section class="bg-gradient-to-b from-amber-100 via-white to-zinc-50">
        <div class=" max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-20">
            <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
                <div class="grid sm:grid-cols-3 gap-4 w-full " data-aos="fade-up">
                    <div class="sm:col-span-2 row-span-2 grid w-full h-fit relative">
                        <article class="relative h-72 sm:h-96 w-full flex  items-end text-white">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="mockup">
                            <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                            <div class="relative  p-6">
                                <h2
                                    class="max-w-2xl mb-2 text-xl font-bold  tracking-tight leading-none
                                capitalize line-clamp-1">
                                    How Lovely Yellow is! It Stands for the Sun</h2>
                                <p class="line-clamp-2 text-sm my-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque reiciendis, voluptatibus
                                    quaerat cum esse debitis qui, id amet a quos beatae saepe molestias labore dolorum
                                    ratione tenetur vel itaque. Itaque!
                                </p>
                                <time class="text-xs font-semibold  tracking-tight bg-primary-500 p-1 px-2 rounded-sm"> Apr
                                    7, 2023 </time>
                            </div>
                        </article>

                    </div>
                    <div class="grid w-full">
                        <article class="relative h-72 sm:h-auto  w-full flex  items-end text-white">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="mockup">
                            <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                            <div class="relative  p-6">
                                <h2
                                    class="max-w-2xl mb-2 text-base font-bold  tracking-tight leading-none
                                capitalize line-clamp-1">
                                    How Lovely Yellow is! It Stands for the Sun</h2>
                                <p class="text-xs line-clamp-2 my-2">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Deleniti facilis modi inventore labore autem maiores adipisci, at dolorem soluta!
                                    Consequatur qui temporibus nihil, beatae dolores ea praesentium sit odit mollitia?</p>

                                <time class="text-xs font-semibold  tracking-tight bg-primary-500 p-1 px-2 rounded-sm"> Apr
                                    7, 2023 </time>
                            </div>
                        </article>
                    </div>
                    <div class="grid w-full">
                        <article class="relative h-72 sm:h-auto w-full flex  items-end text-white">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="mockup">
                            <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                            <div class="relative  p-6">
                                <h2
                                    class="max-w-2xl mb-2 text-base font-bold  tracking-tight leading-none
                                capitalize line-clamp-1">
                                    How Lovely Yellow is! It Stands for the Sun</h2>
                                <p class="text-xs line-clamp-2 my-2">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Deleniti facilis modi inventore labore autem maiores adipisci, at dolorem soluta!
                                    Consequatur qui temporibus nihil, beatae dolores ea praesentium sit odit mollitia?</p>
                                <time class="text-xs font-semibold  tracking-tight bg-primary-500 p-1 px-2 rounded-sm"> Apr
                                    7, 2023 </time>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-4 w-full ">
                    <div class="col-span-2 md:grid h-fit md:gap-2 relative">
                        <h1 class="max-w-2xl mt-8 mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none  dark:text-white capitalize "
                            data-aos="fade-up"> — Actividades recentes</h1>
                        @for ($i = 0; $i < 4; $i++)
                            <div data-aos="fade-up"
                                class="grid sm:grid-cols-3 gap-4 sm:gap-2 flex-row my-2  bg-white hover:cursor-pointer sm:bg-transparent hover:sm:bg-white">
                                <div class="sm:col-span-1 h-48  sm:h-auto relative ">
                                    <img class="absolute inset-0 w-full h-full  object-cover"
                                        src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="mockup">
                                    <div class="absolute   inset-0 bg-gradient-to-t from-black/60 to-black/10"></div>
                                </div>
                                <div class="sm:col-span-2 grid content-center space-y-2 p-4 px-2">
                                    <h2
                                        class=" mb-2 text-lg font-bold  tracking-tight text-gray-900 capitalize line-clamp-2 ">
                                        How Lovely Yellow is! It Stands for the Sun.

                                    </h2>

                                    <p class="line-clamp-3 font-[Poppins] text-[13px] text-gray-800/80">
                                        Venus has a runaway greenhouse effect. I kind of want to know what happened there
                                        because we’re twirling knobs here on Earth without knowing the consequences of it.
                                        Mars once
                                    </p>
                                    <time
                                        class="w-fit text-xs font-semibold tracking-tight bg-slate-100 p-1 px-2 rounded-sm">
                                        Apr 7, 2023 </time>

                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="col-span-1 hidden sm:grid h-fit md:gap-2 md:sticky md:top-0">
                        <h1
                            class="max-w-2xl mt-8 mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none  dark:text-white capitalize ">
                            — Redes sociais</h1>
                        @for ($i = 0; $i < 4; $i++)
                            <div
                                class="flex gap-1 flex-row  items-center justify-between border-b py-3  hover:cursor-pointer sm:bg-transparent hover:sm:text-primary-500">
                                <div class="flex  items-center ">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div class=" text-xs font-semibold  tracking-tightcapitalize line-clamp-2 mx-4">
                                        Facebook
                                    </div>
                                </div>

                                <div>
                                    <svg class="w-5 h-5 right-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M14 12l-4 4V8z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials/partiners')
@endsection
