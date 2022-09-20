<footer class="bg-dark text-inverse" >
    <div class="container py-13 py-md-15" >
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-4">
                <div class="widget text-center text-sm-start ">
                    <h2 class="text-inverse">Sumburero</h2>
                    {{-- <img class="mb-4 img-logo" src="./assets/img/logo-dark.png" alt="Sumburero logo" /> --}}
                    <p class="mb-4">
                        Grupo Técnico de Protecção Social<br /></p>

                    <nav class="nav social justify-content-center justify-content-sm-start">
                        <a href="https://facebook.com/sumburero/"><i class="uil uil-facebook-f"></i></a>
                        <a href="https://instagram.com/sumburerosofala/"><i class="uil uil-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?l=pt-BR&phone=+258845950861&text=Olá Sumburero!"><i
                                class="uil uil-whatsapp"></i></a>

                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget text-center text-sm-start ">
                    <h4 class="widget-title text-inverse mb-3">Navegação</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="{{ url('/') }}">Início</a></li>
                        <li><a href="{{ url('/') }}">Actividades recentes</a></li>
                        <li><a href="{{ url('/') }}">Sobre - nos</a></li>
                        <li><a href="{{ url('/') }}">Contacto</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget text-center text-sm-start ">
                    <h4 class="widget-title  mb-3 text-inverse">Localização e contactos</h4>
                    <address class="">Rua Condestável 1,783
                        Cidade da Beira, Sofala
                        Moçambique
                    </address>
                   <strong>Email: </strong> <a href="mailto:#" class="link-body">Geral.sumburero@gmail.com</a><br />
                   <strong>Telefone 1: </strong> <a href="mailto:+258845950861 " class="link-body">+258 (84) 595 0861</a><br />
                   <strong>Telefone 2: </strong> <a href="mailto:+258845820730 " class="link-body">+258 (84) 582 0730</a><br />

                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->

        </div>
        <!--/.row -->
    </div>
    <p class="text-center text-small bg-black p-1 m-0">© Copyright Sumburero {{ now()->year }}. Todos direitos reservados.</p>
    <!-- /.container -->
</footer>
