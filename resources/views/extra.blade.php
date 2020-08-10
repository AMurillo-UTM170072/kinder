<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('layouts/app')
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <script src="{{asset("js/app.js")}}"></script>
</head>
<body>
        @section('content')
        <h1>extra</h1>
        <div class="contener">
            <form method="POST" action="{{route('extra')}}">
                @csrf
                <input name="name" placeholder="Nombre..." required><br>
                <input type="email" name="Email" placeholder="Email"><br>
                <input name="subject" placeholder="Asunto"><br>
                <textarea name="content" placeholder="Mensaje"></textarea><br>
                <button>Enviar</button>
            </form>
        </div>
@endsection
</body>
</html>