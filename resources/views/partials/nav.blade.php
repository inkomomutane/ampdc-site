<nav class=" border-gray-200 dark:bg-gray-900 text-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-10 mr-3" alt="Sumburero Logo" />
        </a>
        <div class="flex md:order-2">
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
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-cta">
            <ul
                class="flex flex-col bg-white md:bg-transparent font-semibold tracking-tigher p-4 md:p-0 mt-4  md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('welcome') }}"
                        class="block py-2 pl-3 pr-4

                        @if (request()->routeIs('welcome')) text-white bg-blue-700  md:bg-transparent md:text-blue-700 md:p-0
                        @else
                        text-gray-600  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif

                         "
                        aria-current="page">Início</a>
                </li>
                <li>
                    <a href="{{ request()->routeIs('news.page') ? '' : route('news') }}"
                        class="block py-2 pl-3 pr-4  @if (request()->routeIs('news') || request()->routeIs('news.page')) text-white bg-blue-700  md:bg-transparent md:text-blue-700 md:p-0
@else
text-gray-600  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif">Actividades</a>
                </li>

                @if (request()->routeIs('event'))
                    <li>
                        <a href=""
                            class="block py-2 pl-3 pr-4  @if (request()->routeIs('event')) text-white bg-blue-700  md:bg-transparent md:text-blue-700 md:p-0
@else
text-gray-600  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif">Evento</a>
                    </li>
                @endif


                <li>
                    <a href="{{ route('about.us') }}"
                        class="block py-2 pl-3 pr-4  @if (request()->routeIs('about.us')) text-white bg-blue-700  md:bg-transparent md:text-blue-700 md:p-0
@else
text-gray-600  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif">Sobre-nós</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="block py-2 pl-3 pr-4 @if (request()->routeIs('contact')) text-white bg-blue-700  md:bg-transparent md:text-blue-700 md:p-0
                        @else
                        text-gray-600  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif">Contactos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
