<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Detalle extends Model
{
    use HasFactory;
    public $table = "detalle";
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $fillable = [

        'sku',
        'Cod_estiloColor',
        'Cod_Tienda',
        'Cantidad',
        'monto_uni',
        'total',
        'idTransaccion',
        'id_usuario',
        'id_CSL',
        'tipo_entrega',
        'id_direccion',
    ];
}
