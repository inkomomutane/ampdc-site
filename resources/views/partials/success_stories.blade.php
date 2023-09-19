<section class="relative bg-gradient-to-b to-amber-100 from-white dark:bg-gray-900">
    <img class="absolute inset-0 w-full h-full object-cover" src="{{ Vite::asset('resources/images/hero.webp') }}"
        alt="mockup">
    <div class="absolute   inset-0 bg-black opacity-80"></div>
    <div class="splide relative py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-32 " id="histories">
        <div class="max-w-screen-md mb-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white text-start"
                data-aos="fade-up">
                — Histórias de vida</h2>
            <p class="text-white sm:text-sm dark:text-gray-400 text-start" data-aos="fade-up">
                Relatos de satisfação dos serviços fornecidos nos balcões de informação e orientação social.
            </p>
        </div>
        <div class="splide__track">

            <ul class="splide__list">
                @foreach ($histories as $history)
                    <li class="splide__slide">
                        <div class="bg-white/95 px-5 py-2 mx-auto flex flex-col" data-aos="fade-up">
                            <div class="mx-auto">
                                <div class="flex flex-col sm:flex-row mt-10">
                                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                                        <div
                                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                                            <img class=" h-full w-full object-cover mb-2 rounded-full"
                                            src="{{ asset('storage') }}/{{ $history?->image ?? '' }}" alt="mockup">
                                        </div>
                                        <div class="flex flex-col items-center text-center justify-center">
                                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">
                                                {{ $history->title }}
                                            </h2>
                                            <div class="w-12 h-1 bg-zinc-500 rounded mt-2 mb-4"></div>

                                        </div>
                                    </div>
                                    <div
                                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                                        <div class="leading-relaxed text-sm mb-4">
                                            {!!  $history->content  !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>
