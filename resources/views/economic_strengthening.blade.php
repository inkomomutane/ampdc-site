@extends('layouts/base')
@section('seo')
{!! seo($SEOData) !!}
@endsection
@section('content')
<section class="bg-gradient-to-b from-amber-100 via-white bg-gray-50">
    <div class=" max-w-screen-xl md:px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:px-20">
        <div class="mr-auto place-self-center lg:col-span-6 tracking-tight px-4 md:px-8">
            <div class="grid  gap-4 w-full " data-aos="fade-up">
                <div class="grid w-full h-fit relative">
                    <article class="relative min-h-[280px] sm:min-h-[350px] lg:min-h-[420px] flex  items-end text-white">
                        <img class="absolute inset-0 w-full h-full object-cover object-top" src="{{ Vite::asset('resources/images/hero.webp') }}" alt="Sumburero about-us">
                        <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                        <div class="relative  p-6 w-full">
                            <div class="group flex flex-row justify-start rounded-t w-full
                           " data-aos="fade-up">
                                <div class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
                                    <span class="text-sm font-bold capitalize">

                                        SUMBURERO
                                    </span>

                                </div>
                            </div>
                            <div class="grid content-center mr-3 w-full space-y-1">

                                <div class="flex justify-between w-full">
                                    <h2 class=" text-base font-semibold   capitalize tracking-wide mt-3">
                                        Grupo Técnico de protecção Social
                                    </h2>
                                    <ul class="inline-flex -space-x-px text-sm">
                                        <li>
                                            <a href="{{ route('welcome') }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-white rounded-s-lg hover:text-gray-700  ">Voltar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="flex items-center justify-center px-3 h-8 leading-tight text-blue-500 hover:text-white   "> Fortalecimento Económico</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="text-base my-6 p-6  text-justify bg-white  tracking-normal space-y-4">
                        <strong>Fortalecimento Económico </strong> <br>
                        <p>Por meio de iniciativas de capacitação,
                            treinamento e apoio ao
                            empreendedorismo, apoiamos famílias,
                            jovens e adultos em situação de
                            vulnerabilidade socioeconómica a
                            desenvolver competências para reforçar
                            os seus meios de subsistência e
                            profissionalização (iniciar negócios e
                            obter emprego). Isto resulta numa maior
                            autonomia financeira, na redução da
                            pobreza e no crescimento económico
                            local.</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials/partiners')
@endsection