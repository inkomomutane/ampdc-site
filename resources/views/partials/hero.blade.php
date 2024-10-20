<div class="splide" id="hero-slider">
    <div class="splide__track">
        <ul class="splide__list">
            <section class="splide__slide relative bg-gradient-to-b to-amber-100 from-white dark:bg-gray-900">
                <img class="absolute inset-0 w-full h-full object-cover object-top" src="{{ Vite::asset('resources/images/ampdc.jpg') }}" alt="Associação de Mulheres para o Desenvolvimento Comunitário">
                <div class="absolute   inset-0 bg-black opacity-70"></div>
                <div class="relative py-8 px-4 mx-auto max-w-screen-xxl sm:py-16 lg:px-32 ">

                    <div class="grid max-w-screen-xxl px-4 py-8 mx-auto lg:gap-8 xxl:gap-0 lg:py-16 lg:px-8 ">
                        <div class="mr-auto place-self-center tracking-tight p-8">
                            <h2 class="max-w-2xl mb-4 text-2xl text-white font-extrabold tracking-tight leading-none md:text-3xl xl:text-4xl dark:text-white first-letter:uppercase aos-init aos-animate" data-aos="fade-down">
                                Associação de Mulheres para o Desenvolvimento Comunitário
                            </h2>
                            <h1 class="max-w-2xl mb-4 text-primary-500 text-sm font-bold tracking-tight leading-none dark:text-white first-letter:uppercase aos-init aos-animate" data-aos="fade-down">
                                — Unidos pela segurança e justiça
                            </h1>

                            <p class="max-w-2xl mb-6 font-light text-primary-50 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-400 line-clamp-5 aos-init aos-animate" data-aos="fade-down">
                                Organização humanitária sem fins lucrativos que tem como missão de prestar
                                serviços as comunidades carenciadas tendo em atenção as necessidades imediatas
                                com particular destaque a mulheres e crianças órfãs.
                            </p>
                            <a href="{{ route('about.us') }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-sm font-medium text-center bg-primary-100 text-primary-600
                                     hover:bg-primary-600 hover:text-white focus:ring-4 focus:ring-primary-300 transition-transform transform-gpu duration-300 ease-in-out aos-init aos-animate" data-aos="fade-down">
                                Ler mais
                                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            @foreach ($articles as $article)
                <section class="splide__slide relative bg-gradient-to-b to-amber-100 from-white dark:bg-gray-900">
                    <img class="absolute inset-0 w-full h-full object-cover object-top" src="{{ asset('storage') }}/{{ $article->cover }}" alt="{{ $article->title   }}">
                    <div class="absolute   inset-0 bg-black opacity-70"></div>
                    <div class="relative py-8 px-4 mx-auto max-w-screen-xxl sm:py-16 lg:px-32 ">
                        <div class="grid max-w-screen-xxl px-4 py-8 mx-auto lg:gap-8 xxl:gap-0 lg:py-16 lg:px-8">
                            <div class="mr-auto place-self-center tracking-tight p-8">
                                <h2 class="max-w-2xl mb-4 text-2xl text-white font-extrabold tracking-tight leading-none md:text-3xl xl:text-4xl dark:text-white first-letter:uppercase aos-init aos-animate" data-aos="fade-down">
                                    {{ $article->title }}
                                </h2>
                                <h1 class="max-w-2xl mb-4 text-primary-500 text-sm font-bold tracking-tight leading-none dark:text-white first-letter:uppercase aos-init aos-animate" data-aos="fade-down">
                                    — Unidos pela segurança e justiça
                                </h1>

                                <p class="max-w-2xl mb-6 font-light text-primary-50 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-400 line-clamp-5 aos-init aos-animate" data-aos="fade-down">
                                    {{ $article->short_description }}
                                </p>
                                <a href="{{ route('news.page', ['slug' => $article->slug]) }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-sm font-medium text-center bg-primary-100 text-primary-600
                hover:bg-primary-600 hover:text-white focus:ring-4 focus:ring-primary-300 transition-transform transform-gpu duration-300 ease-in-out aos-init aos-animate" data-aos="fade-down">
                                    Ler mais
                                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
        </ul>
    </div>
    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev !bg-black/50 !border-2 !border-white  ">
            <svg class="w-12 h-12 !fill-white" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><g data-name="arrow-right"><path d="M10.46 18a2.23 2.23 0 0 1-.91-.2 1.76 1.76 0 0 1-1.05-1.59V7.79A1.76 1.76 0 0 1 9.55 6.2a2.1 2.1 0 0 1 2.21.26l5.1 4.21a1.7 1.7 0 0 1 0 2.66l-5.1 4.21a2.06 2.06 0 0 1-1.3.46zm0-10v7.9l4.86-3.9z"></path></g></svg>
           </button>
        <button class="splide__arrow splide__arrow--next !bg-black/50">
            <svg class="w-12 h-12 !fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="arrow-right"><path d="M10.46 18a2.23 2.23 0 0 1-.91-.2 1.76 1.76 0 0 1-1.05-1.59V7.79A1.76 1.76 0 0 1 9.55 6.2a2.1 2.1 0 0 1 2.21.26l5.1 4.21a1.7 1.7 0 0 1 0 2.66l-5.1 4.21a2.06 2.06 0 0 1-1.3.46zm0-10v7.9l4.86-3.9z"></path></g></svg> </button>
    </div>
</div>
