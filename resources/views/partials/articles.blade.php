<section class="bg-gradient-to-b from-white to-amber-50 dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-32">
        <div class="splide" id="news">
            <div class="splide__track">
                <h1 class="max-w-2xl mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none
                dark:text-white capitalize "
                    data-aos="fade-up" >— Post's</h1>
                <h2 class="max-w-2xl mb-2 text-2xl font-semibold  tracking-tight leading-none
                 capitalize"
                    data-aos="fade-up" >Actividades recentes.</h2>
                <ul class="splide__list ">

                    @foreach ($articles as $article)
                        <li class="splide__slide py-12">
                            <a
                                href="{{ route('news.page', [
                                    'slug' => $article->slug,
                                ]) }}">
                                <article class="group bg-white flex flex-col justify-start rounded-t" data-aos="fade-up"
                                    >
                                    <img class=" !min-h-[10rem] object-cover mb-2 rounded-t"
                                        src="{{ asset('storage') }}/{{ $article->cover }}" alt="mockup">
                                    <header class="text-gray-600 px-4 ">

                                        <div class="text-xs font-bold capitalize bg-amber-400 p-1 px-2 mb-2 w-fit">
                                            {{ $article->day }} {{ $article->month }},
                                            {{ $article->year }} </div>
                                        <h2 class="line-clamp-1 text-sm font-bold tracking-wide">
                                            {{ $article->title }}
                                        </h2>
                                    </header>
                                    <p class="line-clamp-3 my-2 text-sm px-4">
                                        {{ $article->short_description }}
                                    </p>
                                    <span
                                        class="group-hover:text-primary-500 inline-flex self-start items-center justify-center  font-bold text-center text-xs p-4 right-0">
                                        Ler mais
                                        <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </article>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flex justify-end">
            <a data-aos="fade-up" href="{{ route('news') }}"
                class="inline-flex place-self-center items-center justify-center py-3 text-sm font-medium text-center text-gray-900   px-5 bg-primary-100 hover:bg-primary-200  focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700
     dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Ver todas actividades
                <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
