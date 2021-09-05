<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = 'personas'; 
    
    protected $fillable = [
        'tipo_persona',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'tipo_documento',
        'numero_documento',
        'direccion',
        'telefono',
        'celular',
        'email',
    ]; 
}
