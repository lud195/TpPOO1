<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users'; // 👈 Esta línea le dice que use la tabla 'users'

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'rol',
        'fecha_creacion',
    ];
}
