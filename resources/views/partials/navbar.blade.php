

        <header class="wrapper bg-gray">
            <nav class="navbar navbar-expand-lg  navbar-light navbar-bg-light">
                <div class="container">
                    <div
                        class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                        <div class="navbar-brand w-100">
                            <a href="{{ url('/') }}">
                                <img src="./img/logo-dark.png" class="img-logo" alt="Sumburero logo" />
                            </a>
                        </div>
                        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                            <div class="offcanvas-header d-lg-none">
                                <h3 class="text-white fs-30 mb-0">Sumburero</h3>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">


                                <ul class="navbar-nav">

                                    @foreach (Statamic::query('entries')
                                    ->where('collection', 'pages')->get() as $page)

                                    <li class="nav-item ">
                                        <a class="nav-link @if (request()->url() == (url($page->url))) active @endif"
                                            href="{{ url($page->url) }}"
                                           > {{$page->title}}</a>
                                        <!--/.dropdown-menu -->
                                    </li>

                                    @endforeach


                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="offcanvas-footer d-lg-none">
                                    <div>
                                        <a href="mailto:geral.sumburero@gmail.com" class="link-inverse">Geral.sumburero@gmail.com</a>
                                        <br /> +258 (84)   595 0861 <br />
                                        <nav class="nav social social-white mt-4">
                                        <a href="https://facebook.com/sumburero/"><i class="uil uil-facebook-f"></i></a>
                                        <a href="https://instagram.com/sumburerosofala/"><i class="uil uil-instagram"></i></a>
                                        <a href="https://api.whatsapp.com/send?l=pt-BR&phone=+258845950861&text=Olá Sumburero!"><i class="uil uil-whatsapp"></i></a>
                                        </nav>
                                        <!-- /.social -->
                                    </div>
                                </div>
                                <!-- /.offcanvas-footer -->
                            </div>
                            <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <li class="nav-item">
                                    <nav class="nav social social-muted justify-content-end text-end">
                                        <a href="https://facebook.com/sumburero/"><i class="uil uil-facebook-f"></i></a>
                                        <a href="https://instagram.com/sumburerosofala/"><i class="uil uil-instagram"></i></a>
                                        <a href="https://api.whatsapp.com/send?l=pt-BR&phone=+258845950861&text=Olá Sumburero!"><i class="uil uil-whatsapp"></i></a>

                                    </nav>
                                    <!-- /.social -->
                                </li>
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.navbar-collapse-wrapper -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
