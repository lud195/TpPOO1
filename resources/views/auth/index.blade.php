<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h1 class="mb-4">Bienvenido</h1>
    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg me-3">Iniciar Sesión</a>
    <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg">Registrarse</a>
</div>
</body>
</html>

