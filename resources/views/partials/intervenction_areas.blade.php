<section class="relative bg-gradient-to-b to-amber-100 from-white dark:bg-gray-900">
    <!-- <img class="absolute inset-0 w-full h-full object-cover" src="{{ Vite::asset('resources/images/hero.webp') }}"
        alt="mockup">
    <div class="absolute   inset-0 bg-black opacity-80"></div> -->
    <div class="relative py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-32 ">
        <div class="max-w-screen-md mb-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-black dark:text-white text-start" data-aos="fade-up">
                — Oque fazemos?</h2>
            <p class="text-black sm:text-sm dark:text-gray-400 text-start" data-aos="fade-up">
                Areas de intervenção que o sumburero actua em prol do deenvolvimento comunitário</p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4  gap-4 md:space-y-0">

            <div data-aos="fade-up" class="flex flex-col justify-center items-center bg-gradient-to-b from-white/80 to-white shadow-xl p-4 rounded">
                <div class="flex justify-center items-center mb-4">
                    <img class="h-full object-cover object-left rounded  border-primary-100" src="{{ Vite::asset('resources/images/hero.webp')}}" alt="mockup" data-aos="fade-left">
                </div>
                <h3 class="mb-4 text-sm font-bold dark:text-white text-center h-12 line-clamp-3">Proteção social
                </h3>
                <a href="{{ route('social.protection') }}" class="inline-flex self-start items-center justify-start  font-bold text-center text-xs ">
                    Ler mais
                    <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div data-aos="fade-up" class="flex flex-col justify-center items-center bg-gradient-to-b from-white/80 to-white shadow-xl p-4 rounded">
                <div class="flex justify-center items-center mb-4">
                    <img class="h-full object-cover object-left rounded  border-primary-100" src="{{ Vite::asset('resources/images/hero.webp')}}" alt="mockup" data-aos="fade-left">
                </div>
                <h3 class="mb-4 text-sm font-bold dark:text-white text-center h-12 line-clamp-3">Fortalecimento Económico
                </h3>
                <a href="{{ route('economic.strengthening') }}" class="inline-flex self-start items-center justify-start  font-bold text-center text-xs ">
                    Ler mais
                    <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>

            <div data-aos="fade-up" class="flex flex-col justify-center items-center bg-gradient-to-b from-white/80 to-white shadow-xl p-4 rounded">
                <div class="flex justify-center items-center mb-4 w-24 h-24">
                    Imagem
                </div>
                <h3 class="mb-4 text-sm font-bold dark:text-white text-center h-12 line-clamp-3">Apoio ao Desenvolvimento Tecnico e Institucional
                </h3>
                <a href="{{ route('tecnical.suport') }}" class="inline-flex self-start items-center justify-start  font-bold text-center text-xs ">
                    Ler mais
                    <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div data-aos="fade-up" class="flex flex-col justify-center items-center bg-gradient-to-b from-white/80 to-white shadow-xl p-4 rounded">
                <div class="flex justify-center items-center mb-4 w-24 h-24">
                    Imagem
                </div>
                <h3 class="mb-4 text-sm font-bold dark:text-white text-center h-12 line-clamp-3">Acções Humanitarias
                </h3>
                <a href="{{ route('humanitarian.actions') }}" class="inline-flex self-start items-center justify-start  font-bold text-center text-xs ">
                    Ler mais
                    <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>