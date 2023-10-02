<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
</head>
<body>
    <div class="container">
        <h2>Bienvenido</h2>
        @auth
        <p>Hola, {{ auth()->user()->nombre }} {{ auth()->user()->apellido }}</p>
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
        @else
        <p>Por favor, inicia sesión para ver esta página.</p>
        @endauth
    </div>
</body>
</html>
