<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retiro_local extends Model
{
    use HasFactory;
    public $table = "retiro_local";
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = [
        'id',
        'idTransaccion_FK',
        'Cod_tienda_FK',
        'idComprasinlogin_FK',
        'idUsuario_FK',
        'idDireccion_FK'
    ];
}
