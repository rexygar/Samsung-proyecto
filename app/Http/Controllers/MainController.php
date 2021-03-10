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

    public function __construct()
    {
        $this->middleware('bloqueo');
    }

    public function index(){
        $destacados = DB::select("CALL Ges_Eco_rescatarDestacados()");
        $oferta = DB::select("CALL Ges_Eco_rescatarOferta()");
        return view('Vistas.Index')->with(['oferta' => $oferta, 'destacados' => $destacados]);
    }

    public function index2(){
        if(session()->has('idPago')){
            $idPago = session('idPago');
            if($idPago > 0){
                return redirect()->route('carrito');
            }
        }else{
            return redirect('/');
        }
    }

    public function getProductos1($superCategory){

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('".$superCategory."','','','')");
        $dir = [];

        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos2($superCategory, $category){

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('" . $superCategory . "','" . $category . "','','')");

        $dir = [];
        
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos3($superCategory, $category, $subCategory){

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('".$superCategory."', '" . $category . "','" . $subCategory . "','')");

        $dir = [];
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory]);
        
        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function getProductos4($superCategory, $category, $subCategory, $other){
        
        $productos = DB::select("CALL Ges_Eco_rescatarProducto('".$superCategory."', '" . $category . "','" . $subCategory . "','".$other."')");

        $dir = [];
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory]);
        array_push($dir, ['name' => $other, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory. '/' . $other]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);

    }

    public function getProduct($sku){
        $product = DB::select("CALL Ges_Eco_getProducto('".$sku."')");

        // dd($product);
        $product = $product[0];

        $StockColor = DB::select("CALL `Ges_Eco_getStock`('".$sku."')");
        
        return view('Vistas.producto', compact('product', 'StockColor'));
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
                    $reserva = Reserva::where('sku',$sku)->where('Cod_EstiloColor',$color)->first();
                    
                    if($reserva !== null){
                        $reserva->reserva = $cant + $reserva->reserva;
                        $reserva->monto = $monto;
                        $reserva->Total = ($monto * $reserva->reserva);
                        $reserva->save(); 
                        return 'algo';
                    }else{
                        $reserva = new Reserva();
                        $reserva->sku = $sku;
                        $reserva->reserva = $cant;
                        $reserva->Cod_EstiloColor = $color;
                        $reserva->monto = $monto;
                        $reserva->Total = ($monto * $reserva->reserva);
                        $reserva->descripcion = $descripcion;
                        $reserva->idTransaccion = $idPago;
                        $reserva->save();                        
                    }
                    
                }else{
                    $pago = new Transaccion();
                    $pago->save();
                    session(['idPago' => $pago->id]);
                
                    $reserva = new Reserva();
                
                    $reserva->sku = $sku;
                    $reserva->reserva = $cant;
                    $reserva->Cod_EstiloColor = $color;
                    $reserva->monto = $monto;
                    $reserva->Total = ($monto * $reserva->reserva);
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
                $monto = Reserva::where('idTransaccion', $idPago)->sum('Total');
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

    public function listProduct(Request $request){
        if($request->ajax()){
            $product = DB::select("CALL Ges_Eco_AllProducts()");
            
            return Datatables::of($product)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route('venta.editar');
                $pdf = url('/venta/pdf/' . $row->id);
                $btn = '<form action="' . $url . '" method="GET">
                        <input type="hidden" name="id" value="' . $row->id . '">
                        <button type="submit" class="btn btn-primary">Ver</button>
                        <button type="button" id="' . $row->id . '" class="btn btn-danger" onclick="modales(' . $row->id . ')">Eliminar</button>
                        <a href="' . $pdf . '" class="btn btn-secondary">Imprimir</a>
                    </form>';
                return $btn;
            });
        
        }
        return view('dashboard.lista_Producto');
    }

}
