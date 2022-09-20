@extends('layout')

@section('content')

    <!--Herro Website -->
    <section class="wrapper bg-gray position-relative">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide h-100  bg-overlay-400  bg-dark d-flex align-items-center overflow-hidden">
                        <img src="{{ asset('media/sumburero.png') }}">
                        <div class="bg-overlay"></div>
                        <div class="position-absolute  top-50 start-50 translate-middle container">
                            <div class="row h-100">
                                <div
                                    class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                    <h2 class="display-1 fs-56 mb-4 text-white ">
                                        Proteção social.</h2>
                                    <p
                                        class="lead fs-23 lh-sm mb-7 text-white animate animate__animated animate__bounce animate__delay-2s ">
                                    </p>
                                    <div class=""><a href="#"
                                            class="btn btn-lg btn-outline-white rounded-pill">Ver mais</a></div>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                    </li>
                    <li class="splide__slide h-100 bg-overlay-400  bg-dark d-flex align-items-center overflow-hidden">
                        <img src="{{ asset('/media/actividades.jpg') }}">
                        <div class="bg-overlay"></div>
                        <div class="position-absolute  top-50 start-50 translate-middle container">
                            <div class="row h-100">
                                <div
                                    class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                    <h2 class="display-1 fs-56 mb-4 text-white ">
                                        Sessões temáticas.</h2>
                                    <p
                                        class="lead fs-23 lh-sm mb-7 text-white animate animate__animated animate__bounce animate__delay-2s ">

                                    </p>
                                    <div class=""><a href="#"
                                            class="btn btn-lg btn-outline-white rounded-pill">Ver mais</a></div>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                    </li>
                </ul>
            </div>
            <div class="splide__progress">
                <div class="splide__progress__bar bg-primary">
                </div>
            </div>
            <div class="splide__arrows splide__arrows--ltr">
                <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                    aria-controls="splide01-track">
                    <x-fluentui-arrow-right-16 />
                </button>
                <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                    aria-controls="splide02-track">
                    <x-fluentui-arrow-right-16 />
                </button>
            </div>
        </div>
    </section>

    <!-- Quem somos ?  -->
    <section class="wrapper bg-light">
        <div class="container py-4 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                        style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded">
                        <a href="{{ asset('media/home.jpg') }}" data-glightbox data-gallery="g1">
                            <img src="{{ asset('media/home.jpg') }}" srcset="{{ asset('media/home.jpg') }} 2x"
                                alt="">
                        </a>
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-4 mb-3">Quem somos?</h2>
                    <p class="lead fs-lg"></p>
                    <p class="mb-6">Somos uma organização sem fins lucrativos que tem suas actividades baseadas na
                        experiência e aprendizado de varias Organizações da Sociedade Civil como ESSOR, CCM, OASIS, PNDH,
                        Universidade Zambeze desde vários anos actuando na província de Sofala, Moçambique; assim como
                        através da avaliação do contexto da Protecção Social da Criança realizada através de uma pesquisa em
                        8 Distritos em 2017 e tendo em conta as prioridades de acção do Governo no que respeita a Protecção
                        Social.</p>

                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->


    <!-- Missão e visão -->


    <section class="wrapper bg-gray">
        <div class="container py-14 text-center">
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape bg-line leaf rellax w-16 h-16" data-rellax-speed="1"
                    style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
                <div class="shape bg-dot purple  rellax w-16 h-17" data-rellax-speed="1"
                    style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5 text-center">
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                @svg('fluentui-pin-12', 'icon-svg icon-svg-md text-blue mb-3')
                                <!--  -->
                                <h4>Nossa Missão</h4>
                                <p class="mb-2">É de promover o desenvolvimento sustentável através de pesquisas,
                                    assistência técnica, desenvolvimento de ferramentas de monitoria e avaliação dos
                                    projectos, mobilização de recursos para projectos socias.</p>

                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                @svg('fluentui-eye-12', 'icon-svg icon-svg-md text-red mb-3')
                                <h4>Nossa Visão</h4>
                                <p class="mb-2">É de uma sociedade que zela pelos seus direitos, das crianças em
                                    situação de vulnerabilidade, garantido o acesso a educação básica, saúde, proteçào,
                                    alimentação e promovendo um desenvolvimento psicosocial.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->


    <!-- End visão -->

    <!-- Oque fazemos? -->

    <section class="wrapper bg-white">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Oque fazemos?</h2>
                    <h3 class="display-4 mb-9 text-muted">Principais Actividades.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-md-8 gy-8 position-relative">

                <div class="col-md-6 col-lg-3">
                    <div class=" align-center icon btn btn-block btn-lg btn-soft-yellow disabled mb-5"> <i
                            class="uil uil-phone-volume"></i>
                    </div>
                    <h4>Formação e Inserção profissional</h4>
                    <p class="mb-3">Apoio a jovens e adultos na potencialização de suas habilidades para o mercado de
                        emprego e auto emprego.</p>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-red disabled mb-5"> <i
                            class="uil uil-shield-exclamation"></i> </div>
                    <h4>Proteção social</h4>
                    <p class="mb-3">Promoção de actividades culturais, desportivas, jurídicas e acções concrectas nas
                        comunidades que contribuam para o bem estar das familias vulneráveis.</p>

                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-leaf disabled mb-5"> <i
                            class="uil uil-laptop-cloud"></i>
                    </div>
                    <h4>Monitoria e Avaliação</h4>
                    <p class="mb-3">Criação de ferramentas informáticas que facilitam a monitoria de acções, projectos e
                        resultados.</p>

                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-blue disabled mb-5"> <i class="uil uil-chart-line"></i>
                    </div>
                    <h4>Apoio Institucional</h4>
                    <p class="mb-3">Realização de estudos que ajudem a orientar as estrategias de intervenção comunitária
                        das OCB's. realização de formações em desenvolvimento institucional, elaboração de micro projectos e
                        gestão financeira.</p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->






    <!--Histórias de vida -->
    <section class="wrapper bg-gray">
        <div class="container py-14 py-md-16">
            <div class="row gx-xl-12 gy-10">
                <div class="col-xl-4">
                    <h2 class="display-4 mt-10 mb-3 text-center text-md-start">Histórias de vida</h2>
                    <p class="lead fs-lg mb-6">Relatos de satisfação dos serviços fornecidos nos balcões de informação e
                        orientação social.</p>
                </div>
                <!-- /column -->
                <div class="col-xl-8">
                    <div class="position-relative">
                        <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1"
                            style="top: -1rem; left: -1.7rem;"></div>
                        <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1"
                            style="top: -0.7rem; right: -1.7rem;"></div>
                        <div class="shape rounded-circle bg-line blue rellax w-16 h-16" data-rellax-speed="1"
                            style="bottom: -0.5rem; left: -1.4rem;"></div>
                        <div class="swiper-container dots-closer mb-6">
                            <div class="swiper">
                                <div class="tiny-single-item">
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <div class="card">
                                                <div class="card-body">
                                                    <blockquote class="icon mb-0">
                                                        <p>“A Senhora Amélia conseguiu obter o seu registo de
                                                            nascimento-adultos e conseguiu aproximar ao INSS para
                                                            começar a obter a sua pensão pelo falecimento do seu
                                                            esposo.”</p>
                                                        <div class="blockquote-details">
                                                            <img class="rounded-circle w-12"
                                                                src=""
                                                                srcset=""
                                                                alt="" />
                                                            <div class="info">
                                                                <h5 class="mb-1">Amélia</h5>
                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!-- /.position-relative -->
                </div>
                <div class="text-center col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                    <a href="#" class="btn btn-outline-primary rounded-pill">Ver todas histórias de vida</a>
                </div>

                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->





    <!-- Post's recentes-->
    <section class="wrapper bg-light wrapper-border">
        <div class="container py-5 pt-md-8 pb-md-5">
            <div class="row align-items-center mb-10">
                <div class="col-12 pe-xl-2">
                    <h2 class="display-4 mb-3 text-center  text-md-start">Actividades recentes</h2>
                    <p class="lead fs-lg mb-10 text-center text-md-start ">Nossas últimas actualizações.</p>

                    <div class="swiper">
                        <div class="tiny-three-item">
                            <div class="swiper-slide">


                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                src="{{ asset('media/dicBi.png') }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Ver mais</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">DIC</a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Emissão de Bi em Mananga</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta text-primary">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                    2022</span></li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i></a></li>
                                        </ul>
                                        <!-- /.post-meta text-primary -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                src="{{ asset('media/limpeza_naPraia.png') }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Ver mais</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">Sensibilização</a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                href="./blog-post.html">Preservação do meio ambiente</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta text-primary">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar
                                                    2021</span></li>

                                        </ul>
                                        <!-- /.post-meta text-primary -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                </div>
                <!--/column -->
                <div class="text-center col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                    <a href="#" class="btn btn-outline-primary rounded-pill mb-0">Ver todas actividades</a>
                </div>
                <!--/column -->
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <!-- Receber Notificações-->


@endsection

@section('title', $page->title)
