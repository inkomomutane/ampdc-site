@extends('layouts/base')
@section('seo')
    {!! seo($SEOData) !!}
@endsection
@section('content')
    <section class="bg-gradient-to-b from-primary-200 via-primary-100 to-primary-200">
        <div
            class="max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-16"
        >
            <div
                class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8"
            >
                <div
                    class="grid sm:grid-cols-1 gap-4 w-full"
                    data-aos="fade-up"
                >

                        @if ($article)
                        <div class="sm:col-span-1 min-h-[280px] sm:min-h-[350px] lg:min-h-[420px]  grid w-full  relative">
                            <a
                                href="{{ route("news.page", ["slug" => $article->slug]) }}"
                            >
                                <article class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex  items-end text-white">

                                    <img class="absolute inset-0 w-full h-full object-cover object-top"
                                         src="{{ asset('storage') }}/{{ $article->cover ?? '' }}"
                                         alt="{{ $article->title ?? 'AMPDC' }}">

                                    <div  class="absolute inset-0 bg-gradient-to-t from-black/90 to-black/10"  ></div>
                                    <div class="relative p-6 w-full">
                                        <div
                                            class="group flex flex-row justify-start rounded-t w-full"
                                            data-aos="fade-up"
                                        >
                                            <div
                                                class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                                <span class="text-sm font-bold capitalize">

                                                    {{ $article->month }}
                                                </span>
                                                <span class="text-xl font-extrabold">
                                                    {{ $article->day }}
                                                </span>
                                            </div>
                                            <div
                                                class="grid content-center mx-3 w-full space-y-1"
                                            >
                                                <div
                                                    class="inline-flex flex-col align-middle space-y-2"
                                                >
                                                    <span
                                                        class="inline-flex flex-row align-middle"
                                                    >
                                                        <span
                                                            class="inline-block align-middle mr-2"
                                                        >
                                                            <svg
                                                                class="w-4 h-4 fill-primary-500"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 16 16"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M11.536 3.464a5 5 0 010 7.072L8 14.07l-3.536-3.535a5 5 0 117.072-7.072v.001zm1.06 8.132a6.5 6.5 0 10-9.192 0l3.535 3.536a1.5 1.5 0 002.122 0l3.535-3.536zM8 9a2 2 0 100-4 2 2 0 000 4z"
                                                                ></path>
                                                            </svg>
                                                        </span>
                                                        <span
                                                            class="inline-flex flex-row align-middle text-sm"
                                                        >
                                                            {{ $article->location }}
                                                        </span>
                                                    </span>
                                                </div>
                                                <div
                                                    class="flex justify-between w-full"
                                                >
                                                    <h2
                                                        class="text-base font-semibold capitalize tracking-wide"
                                                    >
                                                        {{ $article->title }}
                                                    </h2>
                                                </div>
                                                <div
                                                    class="flex justify-between w-fit bg-primary-600 p-1 px-2 capitalize text-xs text-white font-semibold"
                                                >
                                                    <span>
                                                        {{ $article?->category ?? '' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                        @endif

                </div>
                <div class="grid md:grid-cols-3 gap-x-4 w-full">
                    <div class="col-span-2 grid h-fit w-full">
                        <h1
                            class="w-full mt-8 mb-4 text-primary-600 text-sm font-extrabold tracking-tight leading-none dark:text-white uppercase"
                            data-aos="fade-up"
                        >
                            — Actividades recentes
                        </h1>
                        @foreach ($articles as $articleItem)
                            <a
                                href="{{ route("news.page", ["slug" => $articleItem->slug]) }}"
                                class="md:mr-4 mb-4 bg-left-bottom bg-gradient-to-r from-primary-600 to-primary-500 bg-[length:0%_3px] bg-no-repeat hover:bg-[length:100%_2px] transition-all duration-500 ease-out hover:scale-[1.01]"
                            >
                                <article
                                    data-aos="fade-up"
                                    class="grid sm:grid-cols-3 gap-4 sm:gap-2 flex-row mb-0.5 bg-white hover:cursor-pointer hover:bg-white/95"
                                >
                                    <div
                                        class="sm:col-span-1 h-48 sm:h-auto relative"
                                    >
                                        <img class="absolute inset-0 w-full h-full  object-cover"
                                             src="{{ asset('storage') }}/{{ $articleItem->cover ?? '' }}"
                                             alt="{{ $articleItem->title ?? 'AMPDC' }}">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/10"
                                        ></div>
                                    </div>
                                    <div
                                        class="sm:col-span-2 grid content-center space-y-2 p-6 sm:px-2"
                                    >
                                        <h2
                                            class="mb-2 text-lg font-bold tracking-tight text-primary-600 capitalize line-clamp-1"
                                        >
                                            {{ $articleItem->title }}
                                        </h2>

                                        <p
                                            class="line-clamp-3 font-[Poppins] text-[13px] text-gray-800/80"
                                        >
                                            {!! $articleItem->short_description !!}
                                        </p>
                                        <time
                                            class="w-fit text-xs text-white font-semibold tracking-tight bg-primary-500 p-1 px-2 rounded-sm"
                                        >
                                           {{ $articleItem->day }}, {{ $articleItem->month }} {{ $articleItem->year }}
                                        </time>
                                    </div>
                                </article>
                            </a>
                        @endforeach
                    </div>

                    <div
                        class="col-span-1 hidden md:grid h-fit sticky top-[72px] z-30"
                    >
                        <h1
                            class="max-w-2xl mt-8 mb-4 text-primary-600 text-sm font-extrabold tracking-tight leading-none uppercase"
                        >
                            — Siga nos:
                        </h1>
                        <div class="bg-white/60 p-4">
                            <div
                                class="fb-page !max-w-full"
                                data-href="https://www.facebook.com/profile.php?id=100064832372770"
                                data-tabs=""
                                data-width=""
                                data-height=""
                                data-small-header="false"
                                data-adapt-container-width="true"
                                data-hide-cover="false"
                                data-show-facepile="true"
                            >
                                <blockquote
                                    cite="https://www.facebook.com/profile.php?id=100064832372770"
                                    class="fb-xfbml-parse-ignore"
                                >
                                    <a
                                        href="https://www.facebook.com/profile.php?id=100064832372770"
                                    >
                                        AMPDC
                                    </a>
                                </blockquote>
                            </div>
                            <a
                                href="https://www.instagram.com/ampdc01"
                                target="_blank"
                            >
                                <div
                                    class="flex gap-1 flex-row items-center justify-between border-b py-3 hover:sm:text-primary-600 hover:cursor-pointer sm:bg-transparent"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="w-5 h-5"
                                            fill="currentColor"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <div
                                            class="text-xs font-semibold tracking-tightcapitalize line-clamp-2 mx-4"
                                        >
                                            Instagram
                                        </div>
                                    </div>

                                    <div>
                                        <svg
                                            class="w-5 h-5 right-0"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <g data-name="external-link">
                                                <path
                                                    d="M20 11a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H6a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1z"
                                                ></path>
                                                <path
                                                    d="M16 5h1.58l-6.29 6.28a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0L19 6.42V8a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-4a1 1 0 0 0 0 2z"
                                                ></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <a
                                href="https://www.youtube.com/@ComunidadeemFoco."
                                target="_blank"
                            >
                                <div
                                    class="flex gap-1 flex-row items-center justify-between pt-3 hover:cursor-pointer sm:bg-transparent hover:sm:text-primary-600"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="w-5 h-5"
                                            stroke-width="1.5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M14 12L10.5 14V10L14 12Z"
                                                fill="currentColor"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            ></path>
                                            <path
                                                d="M2 12.7075V11.2924C2 8.39705 2 6.94939 2.90549 6.01792C3.81099 5.08645 5.23656 5.04613 8.08769 4.96549C9.43873 4.92728 10.8188 4.8999 12 4.8999C13.1812 4.8999 14.5613 4.92728 15.9123 4.96549C18.7634 5.04613 20.189 5.08645 21.0945 6.01792C22 6.94939 22 8.39705 22 11.2924V12.7075C22 15.6028 22 17.0505 21.0945 17.9819C20.189 18.9134 18.7635 18.9537 15.9124 19.0344C14.5613 19.0726 13.1812 19.1 12 19.1C10.8188 19.1 9.43867 19.0726 8.0876 19.0344C5.23651 18.9537 3.81097 18.9134 2.90548 17.9819C2 17.0505 2 15.6028 2 12.7075Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            ></path>
                                        </svg>
                                        <div
                                            class="text-xs font-semibold tracking-tightcapitalize line-clamp-2 mx-4"
                                        >
                                            Youtube
                                        </div>
                                    </div>

                                    <div>
                                        <svg
                                            class="w-5 h-5 right-0"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <g data-name="external-link">
                                                <path
                                                    d="M20 11a1 1 0 0 0-1 1v6a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h6a1 1 0 0 0 0-2H6a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3v-6a1 1 0 0 0-1-1z"
                                                ></path>
                                                <path
                                                    d="M16 5h1.58l-6.29 6.28a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0L19 6.42V8a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-4a1 1 0 0 0 0 2z"
                                                ></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </section>
    @include('partials/partiners')
@endsection
