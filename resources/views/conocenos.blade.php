@extends('layout')
@section('title', 'Conocenos | Fascket')
@section('conocenos', 'active')

        @section('content')
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/bannereventos.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Conocenos</h2>
                            <div class="breadcrumb__option">
                                <a href="{{ route('inicio') }}">Inicio</a>
                                <span>Conocenos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->


        <!-- Contact Section Begin -->
        <section class="contact spad">
            <div class="container text-center mt-5 mb-2">
                </div>
            <div class="container mt-3">
                <div class="row">

                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://i.ibb.co/2WqnBw4/20210907-195711.jpg" width="90">
                            <h5 class="mt-3 name">Jorge Loyaga</h5><span class="work d-block">Backend</span>
                            <div class="mt-4 about"><span>Estudiante de Ing. Sistemas y Tecnico en Computacion, Apasiona por la industria informatica,&nbsp; Me gusta el cine, la musica y los deportes electronicos.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">Ver Perfil</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://i.imgur.com/oJmLthK.jpg" width="90">
                            <h5 class="mt-3 name">Agustin Rojas</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">Ver Perfil</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://i.ibb.co/Fz1hgYL/21-07-01-00-50-17-827.jpg" width="90">
                            <h5 class="mt-3 name">Valeria Silveira</h5><span class="work d-block">Backend</span>
                            <div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">Ver Perfil</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://i.ibb.co/PhTsfBp/IMG-6390.jpg" width="90">
                            <h5 class="mt-3 name">Felipe Fernandez</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">Ver Perfil</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://i.ibb.co/JQ1Z007/Pablo-PNG-06-06-min-min.png" width="90">
                            <h5 class="mt-3 name">Pablo Paladino Costa</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>Diseño grafico, música y tecnología. Tres cosas&nbsp; que siempre me acompañan y me apasionan.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                    <a name="Linkedin Pablo" href="https://www.linkedin.com/in/pablo-costa-2bb71a125">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://i.ibb.co/Yk07KnT/Whats-App-Image-2021-07-07-at-09-19-172.jpg" width="90">
                            <h5 class="mt-3 name">Micaela Outon</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>Diseño grafico, música y tecnología. Tres cosas&nbsp; que siempre me acompañan y me apasionan.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                    <a name="Linkedin Micaela" href="https://www.linkedin.com/in/pablo-costa-2bb71a125">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Contact Section Begin -->
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_phone"></span>
                            <h4>Telefono</h4>
                            <p>+51-3-8888-6868</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_pin_alt"></span>
                            <h4>Direccion</h4>
                            <p>60-49 Road 11378 New York</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_clock_alt"></span>
                            <h4>Horario</h4>
                            <p>10:00 am to 23:00 pm</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_mail_alt"></span>
                            <h4>Email</h4>
                            <p>fascket@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Map Begin -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
                height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="map-inside">
                <i class="icon_pin"></i>
                <div class="inside-widget">
                    <h4>New York</h4>
                    <ul>
                        <li>Phone: +12-345-6789</li>
                        <li>Add: 16 Creek Ave. Farmingdale, NY</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Map End -->

        <!-- Contact Form Begin -->
        <div class="contact-form spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__title">
                            <h2>Contactanos!</h2>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input type="text" placeholder="Tu nombre">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" placeholder="Tu Email">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Tu mensaje"></textarea>
                            <button type="submit" class="site-btn">ENVIAR MENSAJE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Form End -->
        @endsection
