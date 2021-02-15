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
        return view('Vistas.index');
    }

    public function getProductos1($category){

        $productos = DB::connection('sqlsrv')->select("EXEC Ges_Eco_RescatarProducto @Category = '" . $category . "', @SubCategory = '', @SubSubCategory = ''");
        $dir = [];

        array_push($dir, ['name' => $category, 'url' => URL('/') . '/CL' . '/' . $category]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos2($category, $subCategory){

        $productos = DB::connection('sqlsrv')->select("EXEC Ges_Eco_RescatarProducto @Category = '" . $category . "', @SubCategory = '" . $subCategory . "', @SubSubCategory = ''");

        $dir = [];
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/CL' . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/CL' . '/' . $category . '/' . $subCategory]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos3($category, $subCategory, $other){

        $productos = DB::connection('sqlsrv')->select("EXEC Ges_Eco_RescatarProducto @Category = '" . $category . "', @SubCategory = '" . $subCategory . "', @SubSubCategory = '" . $other . "'");

        $dir = [];
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/CL' . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/CL' . '/' . $category . '/' . $subCategory]);
        array_push($dir, ['name' => $other, 'url' => URL('/') . '/CL' . '/' . $category . '/' . $subCategory . '/' . $other]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProduct($sku){
        $product = DB::connection('sqlsrv')->select("EXEC Ges_Eco_getProducto @sku = '" . $sku . "'");
        $product = $product[0];

        $xml = "<?xml version='1.0'?><StockColor>" . $product->StockColor . '</StockColor>';
        $xmlObject = simplexml_load_string($xml);
        $jsonString = json_encode($xmlObject);
        $jsonArray = json_decode($jsonString, true);

        $product->StockColor = $jsonArray['row'];
        $StockColor = $product->StockColor;
        // dd($StockColor );
        return view('store.product', compact('product', 'StockColor'));
    }

    public function pruebaPago(){

        $this->TransbankController = new TransbankController();

        $monto = 5000;
        $idSession = '5584';
        $order = '55555';

        $Pago = $this->TransbankController->initTransaction($monto, $idSession, $order);

        return view('store.cart', compact('Pago'));
    }

    public function addCarrito(Request $request){
        if($request->ajax()){
            try {
                $idPago = session('idPago');
                if($idPago > 0){
                    $reserva = new Reserva();
                
                    $reserva->sku = $request->sku;
                    $reserva->reserva = $request->cantidad;
                    $reserva->idTransaccion = $idPago;
                
                    $reserva->save();
                }else{
                    $pago = new Transaccion();
                    $pago->save();
                    session(['idPago' => $pago->id]);
                
                    $reserva = new Reserva();
                
                    $reserva->sku = $request->sku;
                    $reserva->reserva = $request->cantidad;
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
        $idPago = session('idPago');
        $reserva = Reserva::where('idTransaccion', $idPago)->get();

        return $reserva;
    }

}
