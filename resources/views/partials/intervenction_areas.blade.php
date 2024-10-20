<section class="relative bg-white dark:bg-gray-900">
    <div class="relative py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-32 ">
        <div class="max-w-screen-md mb-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-black dark:text-white text-start" data-aos="fade-up">
                — Areas de intervenção</h2>
            <p class="text-black sm:text-sm dark:text-gray-400 text-start" data-aos="fade-up">
                Áreas de intervenção que o AMPDC actua em prol do desenvolvimento comunitário</p>
        </div>
        <div class="grid  md:grid-cols-2  gap-4 md:space-y-0">
            @foreach($interventions as $area)
                <div class="sm:flex" data-aos="fade-up">
                    <img class="w-full md:basis-1/3 md:max-h-48 rounded-lg sm:rounded-none object-cover object-top" src="{{ asset('storage') }}/{{ $area->image }}" alt="{{ $area->title }}">
                    <div class="md:basis-2/3 p-5 md:py-0 flex flex-col">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">{{ $area->title ?? ''  }}</a>
                        </h3>
                        <p class="mt-3 mb-4 flex-grow font-light text-gray-500 dark:text-gray-400 line-clamp-4 ">
                            {{ $area->description ?? '' }}
                        </p>
                        <a href="{{ route('area.single',['slug' => $area->slug]) }}" class="inline-flex w-fit items-center justify-center px-5 py-2.5 mr-3 text-sm font-medium text-center border border-primary-600 text-primary-600
                                hover:bg-primary-100 focus:ring-4 focus:ring-primary-300 transition-transform transform-gpu duration-300 ease-in-out aos-init aos-animate">
                            Ver mais
                            <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
