<nav>
    {{ request()->routeIs()}}
    <ul>
        <li class='{{ setActive('inicio')}}'><a href='{{ route('inicio') }}'>Inicio</a></li>
        <li class='{{ setActive('proximos-eventos')}}'><a href='{{ route('proximos-eventos') }}'>Próximos eventos</a></li>
        <li class='{{ setActive('tus-eventos')}}'><a href='{{ route('tus-eventos') }}'>Tus Eventos</a></li>
        <li class='{{ setActive('login')}}'><a href='{{ route('login') }}'>Login</a></li>
        <li class='{{ setActive('registro')}}'><a href='{{ route('registro') }}'>Registro</a></li>
    </ul>
</nav>