<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table = 'articulos'; 
    
    protected $fillable = [
        'codigo',
        'nombre',
        'precio_venta',
        'stock',
        'descripcion',
        'imagen',
        'estado',
        'categoria_id',
    ];     
}