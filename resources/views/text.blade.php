 <section class="bg-gradient-to-b from-amber-100 via-white to-zinc-50">
        <div class=" max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-20">
            <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
                <div class="grid sm:grid-cols-1 gap-4 w-full " data-aos="fade-up">
                    <div class="sm:col-span-1  grid w-full h-fit relative">
                        @if ($article)
                            <a
                                href="{{ route('news.page', [
                                    'slug' => $article->slug,
                                ]) }}">
                                <article
                                    class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex  items-end text-white">
                                    <img class="absolute inset-0 w-full h-full object-cover object-top"
                                        src="{{ asset('storage') }}/{{ $article->cover ?? '' }}"
                                        alt="{{ $article->title ?? 'AMPDC' }}">
                                    <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                                    <div class="relative  p-6 w-full">
                                        <div class="group flex flex-row justify-start rounded-t w-full
                               "
                                            data-aos="fade-up">
                                            <div
                                                class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                                <span class="text-sm font-bold capitalize">

                                                    {{ $article->month }}
                                                </span>
                                                <span class="text-xl font-extrabold">
                                                    {{ $article->day }}
                                                </span>
                                            </div>
                                            <div class="grid content-center mx-3 w-full space-y-1">
                                                <div class="inline-flex flex-col align-middle space-y-2">

                                                    <span class="inline-flex flex-row align-middle ">
                                                        <span class="inline-block align-middle mr-2">
                                                            <svg class="w-4 h-4 fill-amber-400"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M11.536 3.464a5 5 0 010 7.072L8 14.07l-3.536-3.535a5 5 0 117.072-7.072v.001zm1.06 8.132a6.5 6.5 0 10-9.192 0l3.535 3.536a1.5 1.5 0 002.122 0l3.535-3.536zM8 9a2 2 0 100-4 2 2 0 000 4z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span
                                                            class="inline-flex flex-row align-middle text-sm ">{{ $article->location }}</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between w-full">
                                                    <h2 class=" text-base font-semibold   capitalize tracking-wide">
                                                        {{ $article->title }}
                                                    </h2>
                                                </div>
                                                <div
                                                    class="flex justify-between w-fit bg-amber-400 p-1 px-2 capitalize text-xs text-gray-900 font-semibold">
                                                    <span>{{ $article->category }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="grid md:grid-cols-3 w-full ">
                    <div class="col-span-2 md:grid h-fit md:gap-2 w-full">
                        <h1 class="w-full mt-8 mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none  dark:text-white capitalize "
                            data-aos="fade-up"> — Actividades recentes</h1>
                        @foreach ($articles as $articleItem)
                            <a
                                href="{{ route('news.page', [
                                    'slug' => $articleItem->slug,
                                ]) }}">
                                <article data-aos="fade-up"
                                    class="grid sm:grid-cols-3 gap-4 sm:gap-2 flex-row my-2  bg-zinc-100 hover:cursor-pointer sm:bg-transparent hover:sm:bg-zinc-100">
                                    <div class="sm:col-span-1 h-48  sm:h-auto relative ">
                                        <img class="absolute inset-0 w-full h-full  object-cover"
                                            src="{{ asset('storage') }}/{{ $articleItem->cover ?? '' }}"
                                            alt="{{ $articleItem->title ?? 'AMPDC' }}">
                                        <div class="absolute   inset-0 bg-gradient-to-t from-black/60 to-black/10"></div>
                                    </div>
                                    <div class="sm:col-span-2 grid content-center space-y-2 p-6 sm:px-2">
                                        <h2
                                            class=" mb-2 text-lg font-bold  tracking-tight text-gray-900 capitalize line-clamp-2 ">
                                            {{ $articleItem->title }}
                                        </h2>

                                        <p class="line-clamp-3 font-[Poppins] text-[13px] text-gray-800/80">
                                            {{ $articleItem->short_description }}
                                        </p>
                                        <time
                                            class="w-fit text-xs font-semibold tracking-tight bg-amber-200 p-1 px-2 rounded-sm">
                                            Apr 7, 2023 </time>

                                    </div>
                                </article>
                            </a>
                        @endforeach
                        <div class="!w-full col-span-1">
                            {{ $articles->onEachSide(0)->links() }}
                        </div>

                    </div>

                    <div class="col-span-1 hidden md:grid h-fit px-4 sticky top-0">
                        <h1
                            class="max-w-2xl mt-8 mb-4 text-gray-600 text-sm font-extrabold tracking-tight leading-none  dark:text-white capitalize ">
                            — Redes sociais
                        </h1>

                        <div class="fb-page !max-w-full" data-href="https://www.facebook.com/profile.php?id=100064832372770" data-tabs=""
                            data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/AMPDC" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/AMPDC">AMPDC</a></blockquote>
                        </div>

                        <a href="https://api.whatsapp.com/send?l=pt-BR&phone=+258845950861&text=Ol%C3%A1%20AMPDC!"
                            target="_blank">
                            <div
                                class="flex gap-1 flex-row  items-center justify-between border-b py-3  hover:cursor-pointer sm:bg-transparent hover:sm:text-green-400">
                                <div class="flex  items-center ">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        stroke="none" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263">
                                        </path>
                                    </svg>

                                    <div class=" text-xs font-semibold  tracking-tightcapitalize line-clamp-2 mx-4">
                                        Whatsapp
                                    </div>
                                </div>

                                <div>
                                    <svg class="w-5 h-5 right-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M14 12l-4 4V8z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <a href="https://instagram.com/AMPDCsofala" target="_blank">
                            <div
                                class="flex gap-1 flex-row  items-center justify-between border-b py-3  hover:cursor-pointer sm:bg-transparent hover:sm:text-[#030431]">
                                <div class="flex  items-center ">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div class=" text-xs font-semibold  tracking-tightcapitalize line-clamp-2 mx-4">
                                        Instagram
                                    </div>
                                </div>

                                <div>
                                    <svg class="w-5 h-5 right-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M14 12l-4 4V8z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
