<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';
    protected $primaryKey = 'id_comentario';

    protected $fillable = [
        'contenido',
        'fecha',
        'usuario_id',
        'posteo_id',
    ];

    // Relaciones

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function posteo() {
        return $this->belongsTo(Posteo::class, 'posteo_id');
    }
}
