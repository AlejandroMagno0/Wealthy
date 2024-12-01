<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen_url',
        'cantidad',
        'tipo_comida',
        'disponibilidad',
        'proteinas',
        'calorias',
        'grasas',
        'carbohidratos',
        'ingredientes',
    ];

    public function detallesPedidos() 
    {
        return $this->hasMany(DetallePedido::class, 'id_plato');
    }
}
