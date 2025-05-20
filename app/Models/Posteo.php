<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    use HasFactory;

    protected $table = 'posteos';

    protected $primaryKey = 'id_posteo';

    protected $fillable = [
        'contenido',
        'fecha',
        'usuario_id',
        'pagina_id',
    ];

    // Relaciones

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function pagina() {
        return $this->belongsTo(Pagina::class, 'pagina_id');
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class, 'posteo_id');
    }
}
