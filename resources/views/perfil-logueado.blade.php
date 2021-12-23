@extends('layout')
@section('title', 'Perfil | Fascket')

@section('content')
<body class="white">
    <nav class="navbar sticky-top navbar-dark bg-primary">

        <a role="button" class="btn-back" href="#" onclick="window.history.go(-1); return false;" aria-label="Volver">
            <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
        </a>

        <h1 class="navbar-brand">Mi perfil</h1>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a role="button" class="nav-link" href="home.html" aria-label="Inicio">
                    <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a role="button" class="nav-link" href="perfil.html" aria-label="Perfil">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="perfil logueado">
            <div class="container">
                <img class="img-perfil" src="img/perfil-logueado.svg" alt="Avatar">
                <h2 class="nombre-perfil"><span class="sr-only">Nombre: </span> Juan Perez</h2>
            </div>
            <div class="seccion-perfil">
                <a href="mis-tickets.html"><i class="fa fa-ticket" aria-hidden="true"></i> Mis <span lang="en">E-Tickets</span></a>
                <a href="editar-perfil.html"><i class="fa fa-pencil" aria-hidden="true"></i> Editar perfil</a>
                <a class="cerrar-sesion" href="home.html"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</a>
            </div>
        </div>
    </main>
</body>
@endsection
