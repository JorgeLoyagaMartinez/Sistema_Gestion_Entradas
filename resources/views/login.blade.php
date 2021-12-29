@extends('layout')
@section('title', 'Registro | Fascket')
@section('content')
    


<main>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container pb-5 mb-sm-4">
            <div class="row pt-5">
                <div class="col-md-6 pt-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="h4 mb-1">Logueate</h2>
                            <div class="d-sm-flex align-items-center py-3">
                                <h3 class="h6 font-weight-semibold opacity-70 mb-3 mb-sm-2 mr-sm-3">Con redes sociales:</h3>
                                <div>
                                    <a class="social-btn sb-facebook mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="social-btn sb-twitter mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Twitter">
                                        <i class="fa fa-twitter"></i> 
                                    </a>
                                    <a class="social-btn sb-linkedin mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <h3 class="h6 font-weight-semibold opacity-70 pt-4 pb-2">O completa el formulario debajo</h3>
                            <form class="needs-validation" novalidate="">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span></div>
                                    <input class="form-control" type="email" placeholder="Email" required="">
                                    <div class="invalid-feedback">Ingresa un mail válido!</div>
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span></div>
                                    <input class="form-control" type="password" placeholder="Password" required="">
                                    <div class="invalid-feedback">Ingresa una contraseña válida!</div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" checked="" id="remember_me">
                                        <label class="custom-control-label" for="remember_me">Recuerdame</label>
                                    </div><a class="nav-link-inline font-size-sm" href="account-password-recovery.html">Olvidaste tu contraseña?</a>
                                </div>
                                <hr class="mt-4">
                                <div class="text-right pt-4">
                                    <button class="btn btn-primary" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-5 pt-sm-3">
                    <h2 class="h4 mb-3">Sin cuenta? Registrate</h2>
                    <p class="text-muted mb-4">Estas sólo a minutos de adquirir la entrada para tu evento</p>
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-fn">Primer Nombre</label>
                                    <input class="form-control" type="text" required="" id="reg-fn">
                                    <div class="invalid-feedback">Ingresá tu primer nombre</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-ln">Apellido</label>
                                    <input class="form-control" type="text" required="" id="reg-ln">
                                    <div class="invalid-feedback">Ingresá tu apellido</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-email">E-mail </label>
                                    <input class="form-control" type="email" required="" id="reg-email">
                                    <div class="invalid-feedback">Ingresá un mail válido</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-phone">Celular</label>
                                    <input class="form-control" type="text" required="" id="reg-phone">
                                    <div class="invalid-feedback">Ingresá tu número de teléfono</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-password">Contraseña</label>
                                    <input class="form-control" type="password" required="" id="reg-password">
                                    <div class="invalid-feedback">Ingresá tu contraseña</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-password-confirm">Confirma Contraseña</label>
                                    <input class="form-control" type="password" required="" id="reg-password-confirm">
                                    <div class="invalid-feedback">Contraseñas no coinciden!</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Registrate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    @endsection
