<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockProducto;
use App\Models\Parametros;

class ApiController extends Controller
{

    public function Mantencion(){
        $bloqueo = Parametros::where('Nombre','Bloqueo')->first();
        if($bloqueo !== null){
            if($bloqueo->Valor == '1'){
                return view('Components.Errores.Mantencion');
            }else{
                return redirect('/');
            }
        }
    }

    public function Bloquear(){
        try {
            $bloqueo = Parametros::where('Nombre','Bloqueo')->first();
            if($bloqueo == null){
                $bloqueo = new Parametros();
                $bloqueo->Nombre = 'Bloqueo';
                $bloqueo->Valor = '1';
            }else{
                $bloqueo->Valor = '1';
            }
            if($bloqueo->save()){
                return json_encode(['Mesagge' => 'Sistema Bloqueado', 
                                    'status' => '0']);
            }else{
                return json_encode(['Mesagge' => 'Error al Bloquear Sistema', 
                                    'status' => '1']);
            }
        } catch (\Throwable $th) {
            return json_encode(['Mesagge' => 'Error al Bloquear Sistema', 
                                'status' => '1']);
        }
    }

    public function Desbloquear(){
        try {
            $bloqueo = Parametros::where('Nombre','Bloqueo')->first();
            if($bloqueo == null){
                $bloqueo = new Parametros();
                $bloqueo->Nombre = 'Bloqueo';
                $bloqueo->Valor = '0';
            }else{
                $bloqueo->Valor = '0';
            }
            if($bloqueo->save()){
                return json_encode(['Mesagge' => 'Sistema Libre', 
                                    'status' => '0']);
            }else{
                return json_encode(['Mesagge' => 'Error al Liberar Sistema', 
                                    'status' => '1']);
            }
        } catch (\Throwable $th) {
            return json_encode(['Mesagge' => 'Error al Liberar Sistema', 
                                'status' => '1']);
        }
    }

    public function Subir(Request $request){
        $sku = '';
        $success = [];
        $fail = [];
        try {
            $content = $request->getContent();
            $content =  json_decode($content, true);

            if(isset($content[0]['Codigo_Barra'])){
                for ($i=0; $i < count($content); $i++) { 
                    $stock = $content[$i];
                    $sku = $stock['Codigo_Barra'];
                    $stockProducto = StockProducto::where('Codigo_Barra',$stock['Codigo_Barra'])
                                        ->where('Cod_EstiloColor', $stock['Cod_EstiloColor'])
                                        ->where('Cod_Producto',$stock['Cod_Producto'] )
                                        ->first();
                    if($stockProducto == null){
                        $stockProducto = new StockProducto();
                        $stockProducto->Codigo_Barra = $stock['Codigo_Barra'];
                        $stockProducto->Cod_Producto = $stock['Cod_Producto'];
                        $stockProducto->Cod_EstiloColor = $stock['Cod_EstiloColor'];
                        $stockProducto->Color = $stock['Color'];
                        $stockProducto->Principal = $stock['Principal'];
                        $stockProducto->Comprometido = $stock['Comprometido'];
                        $stockProducto->Procesado = $stock['Procesado'];
                    }else{
                        $stockProducto->Color = $stock['Color'];
                        $stockProducto->Principal = $stock['Principal'];
                        //$stockProducto->Comprometido = $stock['Comprometido'];
                        //$stockProducto->Procesado = $stock['Procesado'];
                    }
                    if($stockProducto->save()){
                        array_push($success,['SKU' => $sku]);
                        
                    }else{
                        array_push($fail,['SKU' => $sku]);
                    }
                }
                return json_encode(['Mesagge' => 'Registros Actualizados', 
                                    'status' => '0',
                                    'Actualizados' => $success,
                                    'Fallidos' => $fail]);
            }else{
                return json_encode(['Mesagge' => 'Error al leer los Registros', 
                                    'status' => '1']);
            }
        } catch (\Throwable $th) {
            if($sku !== ''){
                return json_encode(['Mesagge' => 'Error al Guardar o Actualizar Stock del SKU: '.$sku, 
                                    'status' => '1',
                                    'Actualizados' => $success,
                                    'Fallidos' => $fail]);
            }
            return json_encode(['Mesagge' => 'Error del Servidor', 
                                'status' => '1',
                                'Actualizados' => $success,
                                'Fallidos' => $fail]);
        }
    }

    public function Descargar(){
        return json_encode(StockProducto::all(),true);
    }

}
