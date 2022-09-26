@section('title', 'Actividades')
@extends('layout')
@section('content')
    <section class="wrapper bg-soft-primary media_data_image_background" data-image="bg3.jpg" >
        <div class="container py-12 py-md-16 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto text-white">
                    <h1 class="display-1 mb-3  text-white">Nossas Actividades</h1>
                    <p class="lead px-lg-5 px-xxl-8 mb-1"></p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light wrapper-border">
        <div class="container inner py-8">
            <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
                <div class="col-lg-8 align-self-center">
                    <div class="blog-filter filter">
                        <p>Filtros:</p>
                        <ul>
                            <li><a class="active" href="#">A.I</a></li>
                            <li><a href="#">EMISSÃO DE DOCUMENTOS</a></li>
                            <li><a href="#">SENIBILIZAÇÕES</a></li>
                            <li><a href="#">FORMAÇÃO</a></li>
                        </ul>
                    </div>
                    <!--/.filter -->
                </div>
                <!--/column -->
                <aside class="col-lg-4 sidebar">
                    <form class="search-form">
                        <div class="form-floating mb-0">
                            <input id="search-form" type="text" class="form-control" placeholder="Search">
                            <label for="search-form">Search</label>
                        </div>
                    </form>
                    <!-- /.search-form -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="blog classic-view">
                        <article class="post">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale"><a href=""><img
                                            src="./assets/img/photos/b1.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Ver mais</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">BIOSP</a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="./blog-post.html">Atendimento</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Emissão de Bilhetes de identidade no <strong>Young África</strong>.</p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12 Aug 2022</span>
                                        </li>
                                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                    Administrator</span></a></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span>
                                                    </span></a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i
                                                    class="uil uil-heart-alt"></i>3</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                    </div>
                    <!-- /.blog -->
                    <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.pagination -->
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-8 mt-lg-6">

                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Actividades recentes</h4>
                        <ul class="image-list">
                            {{-- <li>
                                <figure class="rounded"><a href="./blog-post.html"><img src="./assets/img/photos/a1.jpg"
                                            alt="" /></a></figure>
                                <div class="post-content">
                                    <h6 class="mb-2"> <a class="link-dark" href="./blog-post.html">Magna Mollis
                                            Ultricies</a> </h6>
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                            </li>
                            <li>
                                <figure class="rounded"> <a href="./blog-post.html"><img src="./assets/img/photos/a2.jpg"
                                            alt="" /></a></figure>
                                <div class="post-content">
                                    <h6 class="mb-2"> <a class="link-dark" href="./blog-post.html">Ornare Nullam
                                            Risus</a> </h6>
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                            </li>
                            <li>
                                <figure class="rounded"><a href="./blog-post.html"><img src="./assets/img/photos/a3.jpg"
                                            alt="" /></a></figure>
                                <div class="post-content">
                                    <h6 class="mb-2"> <a class="link-dark" href="./blog-post.html">Euismod Nullam
                                            Fusce</a> </h6>
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2021</span>
                                        </li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5</a>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                            </li> --}}
                        </ul>
                        <!-- /.image-list -->
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Categorias</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            {{-- <li><a href="#">Teamwork (21)</a></li>
                            <li><a href="#">Ideas (19)</a></li>
                            <li><a href="#">Workspace (16)</a></li>
                            <li><a href="#">Coding (7)</a></li>
                            <li><a href="#">Meeting (12)</a></li>
                            <li><a href="#">Business Tips (14)</a></li> --}}
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Arquivo</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            {{-- <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2019</a></li>
                            <li><a href="#">December 2018</a></li>
                            <li><a href="#">November 2018</a></li>
                            <li><a href="#">October 2018</a></li> --}}
                        </ul>
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
