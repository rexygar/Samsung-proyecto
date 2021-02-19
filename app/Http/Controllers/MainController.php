<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaccion;
use App\Models\Reserva;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TransbankController;

class MainController extends Controller
{

    public function index(){
        $destacados = DB::connection('sqlsrv')->select("EXEC Ges_Eco_rescatarDestacados");
        $oferta = DB::connection('sqlsrv')->select("EXEC Ges_Eco_rescatarOferta");
        return view('Vistas.index')->with(['oferta' => $oferta, 'destacados' => $destacados]);
    }

    public function getProductos1($category){

        $productos = DB::connection('sqlsrv')->select("EXEC Ges_Eco_RescatarProducto @Category = '" . $category . "', @SubCategory = '', @SubSubCategory = ''");
        $dir = [];

        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $category]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos2($category, $subCategory){

        $productos = DB::connection('sqlsrv')->select("EXEC Ges_Eco_RescatarProducto @Category = '" . $category . "', @SubCategory = '" . $subCategory . "', @SubSubCategory = ''");

        $dir = [];
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $category . '/' . $subCategory]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos3($category, $subCategory, $other){

        $productos = DB::connection('sqlsrv')->select("EXEC Ges_Eco_RescatarProducto @Category = '" . $category . "', @SubCategory = '" . $subCategory . "', @SubSubCategory = '" . $other . "'");

        $dir = [];
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $category . '/' . $subCategory]);
        array_push($dir, ['name' => $other, 'url' => URL('/') . '/Categoria' . '/' . $category . '/' . $subCategory . '/' . $other]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProduct($sku){
        $product = DB::connection('sqlsrv')->select("EXEC Ges_Eco_getProducto @sku = '" . $sku . "'");
        $product = $product[0];

        $xml = "<?xml version='1.0'?><StockColor>" . $product->StockColor . '</StockColor>';
        $xmlObject = simplexml_load_string($xml);
        $jsonString = json_encode($xmlObject);
        $jsonArray = json_decode($jsonString, true);

        $product->StockColor = $jsonArray;
        $StockColor = $product->StockColor;
        // dd($StockColor );
        return view('Vistas.producto', compact('product', 'StockColor'));
    }

    public function pruebaPago(){

        $this->TransbankController = new TransbankController();

        $monto = 5000;
        $idSession = '5584';
        $order = '55555';

        $Pago = $this->TransbankController->initTransaction($monto, $idSession, $order);

        return view('store.cart', compact('Pago'));
    }

    // REQUEST =  sku - cantidad (in aJAX)
    public function addCarrito(Request $request){
        if($request->ajax()){
            try {
                $idPago = 0;
                if(session()->has('idPago')){
                    $idPago = session('idPago');
                } 

                $sku = (isset($request->sku) && $request->sku != null) ? $request->sku : '';
                $cant = (isset($request->cant) && $request->cant != null) ? $request->cant : 0;
                $color = (isset($request->col) && $request->col != null) ? $request->col : '';
                $monto = (isset($request->monto) && $request->monto != null) ? $request->monto : 0;
                $descripcion = (isset($request->descripcion) && $request->descripcion != null) ? $request->descripcion : '';

                if($idPago > 0){
                    $reserva = new Reserva();
                    
                    $reserva->sku = $sku;
                    $reserva->reserva = $cant;
                    $reserva->Cod_EstiloColor = $color;
                    $reserva->monto = $monto;
                    $reserva->descripcion = $descripcion;
                    $reserva->idTransaccion = $idPago;

                    $reserva->save();
                }else{
                    $pago = new Transaccion();
                    $pago->save();
                    session(['idPago' => $pago->id]);
                
                    $reserva = new Reserva();
                
                    $reserva->sku = $sku;
                    $reserva->reserva = $cant;
                    $reserva->Cod_EstiloColor = $color;
                    $reserva->monto = $monto;
                    $reserva->descripcion = $descripcion;
                    $reserva->idTransaccion = $pago->id;
                
                    $reserva->save();
                }
                return ['status' => 0];
            } catch (\Throwable $th) {
                return ['status' => 1];
            }
        }
    }

    public function getCarrito(){
        $idPago = 0;
        $pago = [];
        $this->TransbankController = new TransbankController();
        if(session()->has('idPago')){
            $idPago = session('idPago');
        }else{
            session(['idPago' => $idPago]);
        }
        $reserva = Reserva::where('idTransaccion', $idPago)->get();
        if(count($reserva) > 0){
            if($idPago > 0){
                $monto = Reserva::where('idTransaccion', $idPago)->sum('monto');
                $order = '54879644';
                $pago = $this->TransbankController->initTransaction($monto,$order, $idPago);
            }
        }else{
            $pago = null;
        }

        
        
        return view('Vistas.carrito', ['reserva' => $reserva, 'pago' => $pago]);        
    }

    // REQUEST =  sku (in aJAX)
    public function removeCarrito(Request $request){
        if($request->ajax()){
            try {
                $idPago = session('idPago');
                
                $sku = (isset($request->sku) && $request->sku != null) ? $request->sku : '';
                
                $reserva = Reserva::where('idTransaccion',$idPago)->where('sku', $sku)->first();
                $reserva->delete();
                /*
                $monto = Reserva::where('idTransaccion', $idPago)->sum('monto');
                
                $tt = Transaccion::where('id', $idPago)->first();
                if($monto > 0){
                    $pago = $this->TransbankController->initTransaction($monto, $tt->order, $idPago);
                }else{
                    $pago = null;
                }
                */
                
            return ['status' => 0 /*, 'Pago' => $pago*/];
            } catch (\Throwable $th) {
                return ['status' => 1];
            }
        }
    }

}
