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
                            <img class="absolute inset-0 w-full h-full object-cover object-top"
                                src="{{ Vite::asset('resources/images/hero.webp') }}" alt="Sumburero about-us">
                            <div class="absolute   inset-0 bg-gradient-to-t from-black/90 to-black/10"></div>
                            <div class="relative  p-6 w-full">
                                <div class="group flex flex-row justify-start rounded-t w-full
                           "
                                    data-aos="fade-up">
                                    <div
                                        class="w-fit  p-4 px-6 bg-amber-400 flex flex-col text-black justify-center items-center ">
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
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="text-base my-6 p-6  text-justify bg-white  tracking-normal space-y-4">
                            <strong>SUMBURERO</strong>, Grupo técnico de protecção social é uma organização Moçambicana de
                            desenvolvimento
                            Comunitário sem fins lucrativos, comprometida em promover protecção social da criança ao nível
                            da província de Sofala. Nossas actividades são baseadas na vasta experiência e aprendizado
                            adquiridos há mais de 3 anos, por meio de parcerias com renomadas Organizações da Sociedade
                            Civil e Públicas, tais como ESSOR, CCM, OASIS, PNDH, e a Universidade Zambeze.

                            <p>
                                Dedicámo-nos em melhorar a qualidade de vida das crianças, especialmente as que se encontram
                                em
                                situação de vulnerabilidade social e económica, que com base nos resultados obtidos por meio
                                da
                                pesquisa realizada em 2017, apontaram para a existência de diversas fragilidades no sector
                                da
                                Protecção Social da Criança ao nível de oito distritos da província alvo de intervenção.
                                Nossas
                                acções são alinhadas às prioridades estabelecidas pelo governo em relação à protecção
                                social.
                            </p>
                            <p>
                                Procuramos garantir que todas as crianças tenham acesso a proteção adequada, educação de
                                qualidade, cuidados de saúde e oportunidades para o seu pleno desenvolvimento através de
                                programas e projectos cuidadosamente planeados. Trabalhamos em estreita colaboração com as
                                comunidades locais, líderes, instituições governamentais e outros parceiros para criar um
                                ambiente seguro e de apoio para as crianças. Acreditamos firmemente no poder da parceria e
                                do envolvimento da comunidade para criar um impacto duradouro.
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials/partiners')
@endsection
