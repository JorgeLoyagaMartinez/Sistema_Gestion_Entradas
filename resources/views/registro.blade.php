@extends('layout')

@section('title', 'Registro')

@section('content')

    <h1>Registro</h1>

    <form method="POST" action={{ route('usuarios.store') }}>
        @csrf
        <input name='name' placeholder="Nombre">
        <input name='email' placeholder="Email">
        <input name='subject' placeholder="Asunto">
        <textarea name="content" id="" cols="30" rows="10">Mensaje</textarea>
        <button type="submit">Enviar</button>
    </form>

@endsection