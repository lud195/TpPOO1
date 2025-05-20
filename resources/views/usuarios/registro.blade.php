<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registro de Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        form { max-width: 400px; margin: auto; }
        input, select { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 10px; width: 100%; background: #007BFF; color: white; border: none; }
        .error { color: red; margin-bottom: 10px; }
        .success { color: green; margin-bottom: 10px; }
    </style>
</head>
<body>

    <h2>Registro de Usuario</h2>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
    @csrf

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>

    <label>Rol:</label>
    <select name="rol" required>
        <option value="usuario">Usuario</option>
        <option value="administrador">Administrador</option>
    </select>

    <button type="submit">Registrarse</button>
</form>


</body>
</html>
