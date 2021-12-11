@extends('layout')

@section('title', 'Registro')

@section('content')

    <h1>Registro</h1>

    <form method="POST" action={{ route('usuarios.store') }}>
        @csrf
        <input type='text' name='nombre' placeholder="Nombre"  value={{ old('nombre') }}>
        {!! $errors->first('nombre', '<small>:message</small>') !!}

        <input type='text' name='apellido' placeholder="Apellido"  value={{ old('apellido') }}>
        {!! $errors->first('apellido', '<small>:message</small>') !!}

        <input type='email' name='mail' placeholder="Email" value={{ old('mail') }}>
        {!! $errors->first('mail', '<small>:message</small>') !!}

        <input type='text' name='telefno' placeholder="Teléfono"  value={{ old('telefono') }}>

        <input type='password' name='password' placeholder="Contraseña"  value={{ old('password') }}>
        {!! $errors->first('password', '<small>:message</small>') !!}
        
        <input type='password' name='password_confirmation' placeholder="Repetir contraseña"  value={{ old('password_confirmation') }}>
        {!! $errors->first('password_confirmation', '<small>:message</small>') !!}

        <button type="submit">Enviar</button>
    </form>

    {{-- Imprimir los errores al final del form
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach 
    @endif --}}
@endsection