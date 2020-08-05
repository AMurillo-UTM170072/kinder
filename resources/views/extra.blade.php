@extends('plantilla')

@section('navegar')
    <h1>extra</h1>
    <form method="POST" action="{{route('extra')}}">
        @csrf
        <input name="name" placeholder="Nombre..." required><br>
        <input type="email" name="Email" placeholder="Email"><br>
        <input name="subject" placeholder="Asunto"><br>
        <textarea name="content" placeholder="Mensaje"></textarea><br>
        <button>Enviar</button>
    </form>
@endsection