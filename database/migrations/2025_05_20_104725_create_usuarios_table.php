<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'rol',
        'fecha_creacion',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'fecha_creacion' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Relaciones
    public function accesos()
    {
        return $this->hasMany(Acceso::class, 'usuario_id');
    }

    public function paginas()
    {
        return $this->hasMany(Pagina::class, 'usuario_id');
    }

    public function posteos()
    {
        return $this->hasMany(Posteo::class, 'usuario_id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'usuario_id');
    }

    public function estadistica()
    {
        return $this->hasOne(Estadistica::class, 'usuario_id');
    }
}
