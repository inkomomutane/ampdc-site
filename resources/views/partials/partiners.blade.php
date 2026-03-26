<section class="bg-primary-100 dark:bg-gray-900">
    <div class="py-8 mx-auto max-w-screen-xl px-4 md:px-32" data-aos="fade-up">
        <div class="splide" id="partiners">
            <div class="splide__track">
                <ul class="splide__list">

                    @if(!empty($partners))
                        @foreach($partners as $partner)
                            <li class="splide__slide">
                                <a href="{{ $partner['URL'] ?? '#' }}" class="flex justify-center items-center">
                                    <img 
                                        class="!h-12 w-max"
                                        src="{{ config('services.strapi.url') }}{{ $partner['Media']['url'] ?? '' }}"
                                        alt="{{ $partner['Name'] ?? 'Partner' }}"
                                    >
                                </a>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </div>
</section>