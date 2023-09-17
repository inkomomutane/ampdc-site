<section class="bg-gray-50 " id="events">
    <div class="grid max-w-screen-xl  px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:px-32">

        <div class="flex flex-col mr-auto place-self-center  tracking-tight p-8 pb-0 text-gray-600 w-full">
            <h1 class="mb-4  text-sm font-extrabold tracking-tight leading-none capitalize " data-aos="fade-up"
                data-aos-delay="5">— Eventos</h1>
            <h2 class=" mb-2 text-2xl font-semibold  tracking-tight leading-none
            " data-aos="fade-up"
                data-aos-delay="10">Próximos eventos.</h2>

            @if ($events->count() > 0)
                <div class=" grid  gap-4 py-6 w-full">
                    @foreach ($events as $event)
                        <a href="{{ route('event', ['slug' => $event->slug]) }}">
                            <article
                                class="group flex flex-row justify-start rounded-t w-full
                        hover:cursor-pointer hover:bg-black/5
                              border-b border-b-amber-200/20
                           "
                                data-aos="fade-up">
                                <div
                                    class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                    <span class="text-sm font-bold capitalize">

                                        {{ $event->month }}
                                    </span>
                                    <span class="text-xl font-extrabold">
                                        {{ $event->day }}
                                    </span>
                                    <span class="text-xs font-base">
                                        {{ $event->start_time }}
                                    </span>

                                </div>
                                <div class="grid content-center mx-3 w-full">
                                    <div class="inline-flex align-middle ">
                                        <span class="inline-flex flex-row align-middle ">
                                            <span class="inline-block align-middle mr-2">
                                                <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.5 4.75a.75.75 0 00-1.5 0v3.5a.75.75 0 00.471.696l2.5 1a.75.75 0 00.557-1.392L8.5 7.742V4.75z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span
                                                class="inline-flex flex-row align-middle text-sm  first-letter:uppercase">Começa
                                                {{ $event->start_date_info }}</span>
                                        </span>
                                        <span class="inline-flex flex-row align-middle ">
                                            <span class="inline-block align-middle mx-2">
                                                <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M11.536 3.464a5 5 0 010 7.072L8 14.07l-3.536-3.535a5 5 0 117.072-7.072v.001zm1.06 8.132a6.5 6.5 0 10-9.192 0l3.535 3.536a1.5 1.5 0 002.122 0l3.535-3.536zM8 9a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span
                                                class="inline-flex flex-row align-middle text-sm  line-clamp-1">{{ $event->location }}</span>
                                        </span>
                                    </div>
                                    <div class="flex  justify-between r my-1 w-full">
                                        <h2 class=" text-lg font-medium  line-clamp-1 capitalize mr-8 tracking-wide">
                                            {{ $event->title }} </h2>
                                        <span
                                            class="group-hover:text-amber-500 flex min-w-fit flex-row self-center items-center  font-medium text-center right-0 pr-4 text-sm ">
                                            Ler mais
                                            <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </a>
                    @endforeach
                </div>
            @else
                <span class="text-xs p-4 bg-amber-50/5 " >
                    — Sem eventos por mostrar
                </span>
            @endif
        </div>
    </div>
</section>
