<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    public $table = "direccion_uss";
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = [
        'calle',
        'numero',
        'comuna',
        'region',
        'depto',
        'user_id',
        'nombre_despacho',
        'apellido_despacho'
    ];
}
