<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('check-login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>

        <p>No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
    </div>
</body>

</html>