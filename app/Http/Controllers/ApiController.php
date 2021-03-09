<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockProducto;
use App\Models\Parametros;
use Illuminate\Support\Facades\DB;

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
        $id = '';
        $success = [];
        try {
            $content = $request->getContent();
            $content =  json_decode($content, true);

            if(isset($content[0]['Id_PrdStock'])){
                for ($i=0; $i < count($content); $i++) { 
                    $stock = $content[$i];
                    $id = $stock['Id_PrdStock'];
                    $SQL = DB::select("CALL Ges_Eco_addStock('".$stock['Id_PrdStock']."', '".$stock['Cod_Producto']."', '".$stock['Cod_EstiloColor']."', ".$stock['addPrincipal'].");");                    
                    array_push($success, ['Id_PrdStock' => $id]);
                }
                return json_encode(['Mesagge' => 'Registros Actualizados', 
                                    'status' => '0',
                                    'Actualizados' => $success ]);
            }else{
                return json_encode(['Mesagge' => 'Error al leer los Registros', 
                                    'status' => '1']);
            }
        } catch (\Throwable $th) {
            if($id !== ''){
                return json_encode(['Mesagge' => 'Error al Guardar o Actualizar Stock del SKU: '.$id, 
                                    'status' => '1',
                                    'Actualizados' => $success,
                                    'Fallidos' => ['Id_PrdStock' => $id]]);
            }
            return json_encode(['Mesagge' => 'Error del Servidor', 
                                'status' => '1',
                                'Actualizados' => $success,
                                'Fallidos' => ['Id_PrdStock' => $id]]);
        }
    }

    public function Descargar(){
        return json_encode( DB::select("CALL Ges_Eco_getAllStock()"),true);
    }

}
