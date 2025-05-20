<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Rutas de Autenticación
|--------------------------------------------------------------------------
*/

// Formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Envío del formulario de registro
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Formulario de login
Route::get('/login', function () {
    return view('auth.index'); // Asegurate de que este archivo exista
})->name('login');

// Envío del formulario de login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

/*
|--------------------------------------------------------------------------
| Ruta principal con verificación de sesión
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    if (Auth::check()) {
        return view('welcome'); // Vista después de iniciar sesión
    } else {
        return redirect()->route('login');
    }
});

/*
|--------------------------------------------------------------------------
| Ruta de logout (opcional, si querés cerrar sesión)
|--------------------------------------------------------------------------
*/


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');
