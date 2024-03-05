<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model 
{
    use HasFactory;
    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    public function resenas() {
        return $this->hasMany(Resena::class);
    }

    public function categorias() {
        return $this->belongsToMany(Categoria::class, 'libro_categoria', 'libro_id', 'categoria_id');
    }
}
