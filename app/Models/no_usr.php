<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class no_usr extends Model
{
    use HasFactory;
    public $table = "compra_sin_login";
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = [
        'rut',
        'nombres',
        'apellidos',
        'correo',
        'Telefono',
        'direccion',
        'numero',
        'detalle',
        'nombre_despacho',
        'apellido_despacho',
        'tipo_entrega',
        'id_transaccion_FK'
    ];
}
