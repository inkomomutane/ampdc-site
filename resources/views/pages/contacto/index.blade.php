@section('title', 'Contacto')
@extends('layout')
@section('content')
<section class="wrapper bg-soft-primary" style='background-image: url("{{asset('img/bg3.jpg')}}");"'>
    <div class="container pb-19 pt-8 py-md-16  text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto mb-4 mb-md-12 ">
                <h1 class="display-1 mb-3 text-white">Entre em contacto</h1>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-6 align-self-stretch">
                                <div class="map map-full rounded-top rounded-lg-start">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7011.916661559433!2d34.879560195853735!3d-19.84815137878296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf84491837f778886!2sESSOR%20MACUTI!5e1!3m2!1spt-PT!2smz!4v1660490597139!5m2!1spt-PT!2smz"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: 100%; height: 100%"></iframe>
                                </div>
                                <!-- /.map -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-14">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-location-pin-alt"></i> </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1">Localização</h5>
                                            <address>Rua Condestável 1,783
                                                Beira,<br class="d-none d-md-block" />Sofala,
                                                Moçambique</address>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-phone-volume"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Telefone</h5>
                                            <p>+258 84 595 0861 55<br />+258 86 595 0861 55</p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-envelope"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">E-mail</h5>
                                            <p class="mb-0"><a href="mailto:geral.sumburero@gmail.com"
                                                    class="link-body">geral.sumburero@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row bg-soft-primary p-4 rounded">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 pt-8"
                >
                    <h2 class="display-4 mb-3 text-center">Enviar uma mensagem</h2>
                    <p class="lead text-center mb-10"></p>
                    <form class="contact-form needs-validation" method="get" action="" novalidate>
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Jane" required>
                                    <label for="form_name">Primeiro nome *</label>
                                    <div class="valid-feedback"> ! </div>
                                    <div class="invalid-feedback"> Por favor insira o nome. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Doe" required>
                                    <label for="form_lastname">Último nome *</label>
                                    <div class="valid-feedback"> ! </div>
                                    <div class="invalid-feedback"> Por favor insira ultimo nome. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="jane.doe@example.com" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> ! </div>
                                    <div class="invalid-feedback"> Por favor insira o email </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                        required></textarea>
                                    <label for="form_message">Messagem *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Por favor insira  a mensagem. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                    value="Enviar mensagem">
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
