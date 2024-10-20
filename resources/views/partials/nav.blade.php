<div class="bg-primary-50 border-b border-b-primary-500 p-2.5 xl:p-0">
    <div class="max-w-screen-2xl mx-4 xl:mx-auto  ">
        <div class="flex flex-row justify-between">
            <div class=" sm:basis-1/2  xl:basis-9/12 flex items-center">
                <div class="flex flex-row gap-x-4">
                    <ul class="flex-none flex gap-4 ">
                        <li class="inline-flex items-center text-xs font-extrabold  text-primary-800 gap-x-1  p-1.5 rounded-bl-2xl rounded-r-3xl px-2 uppercase">
                            <span>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none"><path d="M21.75 3C23.5449 3 25 4.45507 25 6.25V21.75C25 23.5449 23.5449 25 21.75 25H6.25C4.45507 25 3 23.5449 3 21.75V6.25C3 4.45507 4.45507 3 6.25 3H21.75ZM23.5 9.503H4.5V21.75C4.5 22.7165 5.2835 23.5 6.25 23.5H21.75C22.7165 23.5 23.5 22.7165 23.5 21.75V9.503ZM8.74878 17.5014C9.43913 17.5014 9.99878 18.0611 9.99878 18.7514C9.99878 19.4418 9.43913 20.0014 8.74878 20.0014C8.05842 20.0014 7.49878 19.4418 7.49878 18.7514C7.49878 18.0611 8.05842 17.5014 8.74878 17.5014ZM14.0033 17.5014C14.6936 17.5014 15.2533 18.0611 15.2533 18.7514C15.2533 19.4418 14.6936 20.0014 14.0033 20.0014C13.3129 20.0014 12.7533 19.4418 12.7533 18.7514C12.7533 18.0611 13.3129 17.5014 14.0033 17.5014ZM8.74878 12.5014C9.43913 12.5014 9.99878 13.0611 9.99878 13.7514C9.99878 14.4418 9.43913 15.0014 8.74878 15.0014C8.05842 15.0014 7.49878 14.4418 7.49878 13.7514C7.49878 13.0611 8.05842 12.5014 8.74878 12.5014ZM14.0033 12.5014C14.6936 12.5014 15.2533 13.0611 15.2533 13.7514C15.2533 14.4418 14.6936 15.0014 14.0033 15.0014C13.3129 15.0014 12.7533 14.4418 12.7533 13.7514C12.7533 13.0611 13.3129 12.5014 14.0033 12.5014ZM19.2577 12.5014C19.9481 12.5014 20.5077 13.0611 20.5077 13.7514C20.5077 14.4418 19.9481 15.0014 19.2577 15.0014C18.5674 15.0014 18.0077 14.4418 18.0077 13.7514C18.0077 13.0611 18.5674 12.5014 19.2577 12.5014ZM21.75 4.5H6.25C5.2835 4.5 4.5 5.2835 4.5 6.25V8.003H23.5V6.25C23.5 5.2835 22.7165 4.5 21.75 4.5Z" fill="currentColor"></path></svg>
                            </span>{{ now()->locale('pt')->translatedFormat('d F Y') }}
                        </li>
                        <li class="hidden xl:inline-flex items-center text-white font-bold  bg-primary-500 p-2.5   ">
                            <span class="">
                              Eventos
                            </span>
                        </li>
                    </ul>

                    <div id="events-top-slider" class="splide w-fit hidden xl:flex">
                        <div class="splide__track" >
                            <ul class="splide__list text-sm text-gold-sand-100 inline-flex items-center" id="header_trending_news-list" role="presentation" style="transform: translateX(-1739px);">
                                @foreach ($events as $event)
                                <li class="splide__slide">
                                    <p class="line-clamp-1">
                                        <a href="{{ route('event', ['slug' => $event->slug]) }}" class="inline-flex items-center justify-center" >
                                            <span class="text-xs font-bold capitalize text-white bg-primary-400 p-1 px-2 w-fit">
                                                {{ $event->day }} {{ $event->month }}, {{ $event->year }}
                                            </span> &nbsp; {{ $event->title }}
                                        </a>
                                    </p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
               <ul class="flex items-center justify-center gap-4 text-primary-900 sm:justify-start">
                   <li>
                       <a
                           href="https://www.facebook.com/profile.php?id=100064832372770"
                           rel="noreferrer"
                           target="_blank"
                           class="hover:text-primary-500 transition"
                       >
                           <span class="sr-only">Facebook</span>
                           <svg
                               class="h-5 w-5"
                               fill="currentColor"
                               viewBox="0 0 24 24"
                               aria-hidden="true"
                           >
                               <path
                                   fill-rule="evenodd"
                                   d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                   clip-rule="evenodd"
                               />
                           </svg>
                       </a>
                   </li>
                   <li>
                       <a
                           href="https://www.instagram.com/ampdc01"
                           rel="noreferrer"
                           target="_blank"
                           class="hover:text-primary-500 transition"
                       >
                           <span class="sr-only">Instagram</span>
                           <svg
                               class="h-5 w-5"
                               fill="currentColor"
                               viewBox="0 0 24 24"
                               aria-hidden="true"
                           >
                               <path
                                   fill-rule="evenodd"
                                   d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                   clip-rule="evenodd"
                               />
                           </svg>
                       </a>
                   </li>
                   <li>
                       <a
                           href="https://www.youtube.com/@ComunidadeemFoco."
                           rel="noreferrer"
                           target="_blank"
                           class="hover:text-primary-400 transition "
                       >
                           <span class="sr-only">Youtube</span>
                           <svg
                               class="w-5 h-5"
                               xmlns="http://www.w3.org/2000/svg"
                               width="16"
                               height="16"
                               fill="currentColor"
                               viewBox="0 0 16 16"
                           >
                               <path
                                   d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                               ></path>
                           </svg>
                       </a>
                   </li>
                   <li>
                       <a
                           href="/"
                           rel="noreferrer"
                           target="_blank"
                           class="hover:text-red-400 transition"
                       >
                           <span class="sr-only">Ampdc</span>
                           <svg
                               class="h-5 w-5"
                               fill="currentColor"
                               viewBox="0 0 24 24"
                               aria-hidden="true"
                           >
                               <path
                                   fill-rule="evenodd"
                                   d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                   clip-rule="evenodd"
                               />
                           </svg>
                       </a>
                   </li>
               </ul>
            </div>
        </div>
    </div>
</div>

<nav class="bg-white border-b border-slate-200 shadow-sm-light dark:bg-gray-900 text-sm sticky top-0 z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ Vite::asset('resources/images/logo.webp') }}" class="h-10 mr-3" alt="AMPDC Logo"  />
        </a>
        <div class="flex md:order-4 mr-8 !w-44">
            <div id="google_translate_element" class="!text-gray-600 !font-semibold "></div>

        </div>

        <div class="flex md:order-3 self-start">
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>


        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-2 " id="navbar-cta">
            <ul
                class="flex flex-col bg-white md:bg-transparent font-semibold tracking-tigher p-4 md:p-0 mt-4  md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('welcome') }}"
                       @class([
                            'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('welcome'),
                            'block py-2 pl-3 pr-4 text-slate-600 hover:bg-primary-100  md:hover:bg-transparent md:bg-transparent md:text-slate-600 hover:text-primary-600 md:p-0' => !request()->routeIs('welcome')
                        ])
                        aria-current="page">Início</a>
                </li>
                <li >
                    <a href="{{ route('news') }}"
                        @class([
                            'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('news'),
                            'block py-2 pl-3 pr-4 text-slate-600 hover:bg-primary-100  md:hover:bg-transparent md:bg-transparent md:text-slate-600 hover:text-primary-600 md:p-0' => !request()->routeIs('news'),
                        ])
                    >
                        Actividades
                    </a>
                </li>

                @if(request()->routeIs('news.page'))
                    <li >
                        <a href=""
                            @class([
                                'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('news.page'),
                                'block py-2 pl-3 pr-4 text-slate-600 hover:bg-primary-100  md:hover:bg-transparent md:bg-transparent md:text-slate-600 hover:text-primary-600 md:p-0' => !request()->routeIs('news.page'),
                            ])
                        >
                            Actividade
                        </a>
                    </li>
                @endif




                @if (request()->routeIs('event'))
                <li>
                    <a href=""
                       @class([
                              'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('event'),
                              'block py-2 pl-3 pr-4 text-slate-600 hover:bg-primary-100  md:hover:bg-transparent md:bg-transparent md:text-slate-600 hover:text-primary-600 md:p-0' => !request()->routeIs('event')
                          ])
                       aria-current="page">Evento</a>
                </li>
                @endif
                @if (request()->routeIs('area.single'))
                    <li>
                        <a href=""
                           @class([
                                  'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('area.single'),
                                ])
                           aria-current="page">Area de intervenção</a>
                    </li>
                @endif

                <li>
                    <a href="{{ route('about.us') }}"
                       @class([
                             'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('about.us'),
                             'block py-2 pl-3 pr-4 text-slate-600 hover:bg-primary-100  md:hover:bg-transparent md:bg-transparent md:text-slate-600 hover:text-primary-600 md:p-0' => !request()->routeIs('about.us')
                         ])
                       aria-current="page">Sobre-nós</a>
                </li>

                <li>
                    <a href="{{ route('contact') }}"
                        @class([
                            'block py-2 pl-3 pr-4 text-white bg-primary-600  md:bg-transparent md:text-primary-600 md:p-0' => request()->routeIs('contact'),
                            'block py-2 pl-3 pr-4 text-slate-600 hover:bg-primary-100  md:hover:bg-transparent md:bg-transparent md:text-slate-600 hover:text-primary-600 md:p-0' => !request()->routeIs('contact')
                        ])
                       @class([
                            'block py-2 pl-3 pr-4 text-white bg-primary-700  md:bg-transparent md:text-primary-700 md:p-0' => request()->routeIs('contact'),
                            'text-gray-600  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' => !request()->routeIs('contact')
                        ])>Contactos</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
