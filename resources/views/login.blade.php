@extends('layout')
@section('title', 'Registro | Fascket')

    @section('content')
    <main>
        <div class="welcome-container ingresar">
            <div class="welcome-container-inner">
                <div class="container">
                    <div class="ntc-container text-center">
                        <a role="button" href="#" onclick="window.history.go(-1); return false;" class="btn btn-link btn-block">Cerrar</a>
                        <img src="img/darth.svg" alt="No tengo cuenta" aria-hidden="true">
                        <h1 class="no-tengo-cuenta">¿Aún no tenés cuenta?</h1>
                        <a role="button" href="registro-facebook.html" class="btn btn-primary btn-block">Registrarme con Facebook</a>
                        <a role="button" href="registro.html" class="btn btn-primary btn-block">Registrarme con mi email</a>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    </body>
    @endsection
