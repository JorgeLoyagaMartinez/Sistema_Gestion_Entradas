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

                    <div class="col-md-4 my-4">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-center rounded-circle" src="https://i.ibb.co/7kLjDyV/perfil.jpg"  width="90">
                            <h5 class="mt-3 name">Agustin Rojas</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>Estudiante de ingenieria en informatica, apasionado por la tecnologia y la musica.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                <a name="Linkedin Agustin" href="https://www.linkedin.com/in/rojasagusf/">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>
                    


                    <div class="col-md-4 my-4">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-center rounded-circle" src="https://i.ibb.co/JQ1Z007/Pablo-PNG-06-06-min-min.png" width="90">
                            <h5 class="mt-3 name">Pablo Paladino Costa</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>Diseño grafico, música y tecnología. Tres cosas&nbsp; que siempre me acompañan y me apasionan.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                    <a name="Linkedin Pablo" href="https://www.linkedin.com/in/pablo-costa-2bb71a125">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-4">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-center rounded-circle" src="https://i.ibb.co/Wf4y3D1/perfil.jpg" width="80">
                            <h5 class="mt-3 name">Felipe Fernandez</h5><span class="work d-block">Frontend</span>
                            <div class="mt-4 about"><span>Estudiante de Sistemas, me apasiona la tecnologia. Organizado y perseverante. Me gusta trabajar en equipo.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">

                                 <a name="Linkedin Felipe" href="https://www.linkedin.com/in/felipe-m-fernandez-8671791b0/">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-4">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-center rounded-circle" src="https://i.ibb.co/Yk07KnT/Whats-App-Image-2021-07-07-at-09-19-172.jpg" width="90">
                            <h5 class="mt-3 name">Micaela Outon</h5><span class="work d-block">Backend</span>
                            <div class="mt-4 about"><span>Me apasiona la tecnología y el running. Estudiante de Lic. en Relaciones del Trabajo.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                    <a name="Linkedin Micaela" href="https://www.linkedin.com/in/micaela-outon-411287201/">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 my-4">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-center rounded-circle" src="https://i.ibb.co/Fz1hgYL/21-07-01-00-50-17-827.jpg" width="90">
                            <h5 class="mt-3 name">Valeria Silveira</h5><span class="work d-block">Backend</span>
                            <div class="mt-4 about"><span>React frontend developer. Ingeniera química en busca de un cambio de profesión.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                <a name="Linkedin Valeria" href="https://www.linkedin.com/in/valeriasilveira/">Ver Perfil</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-4">
                        <div class="bg-white p-3 text-center rounded box"><img class="img-center rounded-circle" src="https://i.ibb.co/q9h2N3H/Whats-App-Image-2021-12-29-at-02-10-31.jpg" width="90">
                            <h5 class="mt-3 name">Jorge Loyaga</h5><span class="work d-block">Backend</span>
                            <div class="mt-4 about"><span>Estudiante de Ing. Sistemas y Tecnico en Computacion. Apasionado por la industria informatica. Me gusta el cine, la musica y los deportes electronicos.</span></div>
                            <div class="mt-4">
                                <h6 class="v-profile">
                                <a name="Linkedin Jorge" href="https://www.linkedin.com/in/jorge-loyaga-martinez-62855b149">Ver Perfil</a></h6>
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
                            <p>(5411) 4867-7500.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_pin_alt"></span>
                            <h4>Direccion</h4>
                            <p>Mozart 2300. CABA, Buenos Aires.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_clock_alt"></span>
                            <h4>Horario</h4>
                            <p>9:00 am to 18:00 pm</p>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>DONDE ESTAMOS?</h2>
                </div>
            
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.7729144388854!2d-58.46990128424354!3d-34.660437468009576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc966bf151d67%3A0x255fef772508e89c!2sUTN.BA!5e0!3m2!1ses!2sar!4v1640144326152!5m2!1ses!2sar" 
                    height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               
                    </div>
                </div>
            </div>
        </div>
        <!-- Map End -->

        
        @endsection
