<?php

namespace App\Models;

use CodeIgniter\Model;

class Ficha_model extends Model
{
    protected $table = 'cliente';

    protected $allowedFields = [
        'id_cliente',
        'nombres',
        'apellidos',
        'correo',
        'direccion',        
        'telefono',
        'estado',
        'created_at',
        'id_membresia',
    ];
}
