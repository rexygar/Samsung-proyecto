<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaccion;
use App\Models\Reserva;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TransbankController;
use Illuminate\Support\Facades\Auth;
use App\Models\Direccion;
use App\Models\Images;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('bloqueo');
    }

    public function index(){
        $destacados = DB::select("CALL Ges_Eco_rescatarDestacados()");
        $oferta = DB::select("CALL Ges_Eco_rescatarOferta()");
        $imageSup = DB::table('images')->where('tipo','sliderSup')->take(3)->get();
        $imageInf = DB::table('images')->where('tipo','sliderInf')->take(3)->get();
        return view('Vistas.Index')->with(['oferta' => $oferta, 'destacados' => $destacados, 'imageSup' => $imageSup, 'imageInf' => $imageInf]);
    }

    public function search(Request $request){
             
        $search = preg_replace('([^A-Za-z0-9 ])', '', trim($request->search));
        return redirect('/Search'.'/'.$search);
    }

    public function search2($search){
        
        $productos = DB::select("CALL Ges_Eco_search('%".$search."%')");
        return view('store.filtros')->with(['productos' => $productos, 'dir' => []]);
    }

    public function index2(){
        if(Auth::user()->rol_id == '2'){
            return view('dashboard.dashboard');
        }
        if(session()->has('idPago')){
            $idPago = session('idPago');
            if($idPago > 0){
                return redirect()->route('carrito');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }
    }

    public function getProductos1($superCategory){

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('".$superCategory."','','','')");
        $dir = [];
        $image = DB::table('images')->where('tipo','header')->take(1)->get();
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProductos2($superCategory, $category){

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('" . $superCategory . "','" . $category . "','','')");
        $image = DB::table('images')->where('tipo','header')->take(1)->get();
        $dir = [];
        
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProductos3($superCategory, $category, $subCategory){

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('".$superCategory."', '" . $category . "','" . $subCategory . "','')");
        $image = DB::table('images')->where('tipo','header')->take(1)->get();

        $dir = [];
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory]);
        
        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProductos4($superCategory, $category, $subCategory, $other){
        
        $productos = DB::select("CALL Ges_Eco_rescatarProducto('".$superCategory."', '" . $category . "','" . $subCategory . "','".$other."')");
        $image = DB::table('images')->where('tipo','header')->take(1)->get();

        $dir = [];
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory]);
        array_push($dir, ['name' => $other, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory. '/' . $other]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);

    }

    public function getProduct($sku){
        $product = DB::select("CALL Ges_Eco_getProducto('".$sku."')");

        $product = $product[0];
       
        $super =    str_replace(' ','_',    ($product->SupCategoria     !== "SIN DEFINIR") ? $product->SupCategoria     : '_');
        $cate =     str_replace(' ','_',    ($product->Categoria        !== "SIN DEFINIR") ? $product->Categoria        : '_');
        $subCate =  str_replace(' ','_',    ($product->SubCategoria     !== "SIN DEFINIR") ? $product->SubCategoria     : '_');
        $subsub =   str_replace(' ','_',    ($product->SubSubCategoria  !== "SIN DEFINIR") ? $product->SubSubCategoria  : '_');
        $name =     str_replace(' ','_',    ($product->Descripcion      !== "SIN DEFINIR") ? $product->Descripcion      : '_');

        return redirect('/'.'Categoria/'.$super.'/'.$cate.'/'.$subCate.'/'.$subsub.'/'.$name);
        
    }
    
    public function getProductOther($superCategory, $category, $subCategory, $other, $name){

        $super =    str_replace('_',' ',    ($superCategory !== "_") ? $superCategory     : 'SIN DEFINIR');
        $cate =     str_replace('_',' ',    ($category      !== "_") ? $category          : 'SIN DEFINIR');
        $subCate =  str_replace('_',' ',    ($subCategory   !== "_") ? $subCategory       : 'SIN DEFINIR');
        $subsub =   str_replace('_',' ',    ($other         !== "_") ? $other             : 'SIN DEFINIR');
        $nom =      str_replace('_',' ',    ($name          !== "_") ? $name              : 'SIN DEFINIR');

        $product = DB::select("CALL Ges_Eco_getProducto2('".$super."', '".$cate."', '".$subCate."', '".$subsub."', '".$nom."')");

       
        $product = $product[0];
        
        $StockColor = DB::select("CALL `Ges_Eco_getStock`('".$product->SKU."')");
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
                
                $d = DB::select("CALL Ges_Eco_addCarrito('".$reserva->sku."','".$reserva->Cod_EstiloColor."',".$reserva->reserva.")");
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
        $tiendas = DB::select("CALL Ges_getTiendas()");
        $direccion = null;
        if (Auth::check()) {
            $id = Auth::id();
            $direccion = Direccion::where('user_id', $id)->get();
        }

        return view('Vistas.carrito', ['reserva' => $reserva, 'pago' => $pago, 'tiendas' => $tiendas, 'direccion' => $direccion]);        
    }

    // REQUEST =  sku (in aJAX)
    public function removeCarrito(Request $request){
        if($request->ajax()){
            try {
                $idPago = session('idPago');
                
                $sku = (isset($request->sku) && $request->sku != null) ? $request->sku : '';
                
                $reserva = Reserva::where('idTransaccion',$idPago)->where('sku', $sku)->first();
                $estiloColor = $reserva->Cod_EstiloColor;
                $cant = $reserva->reserva;
                $reserva->delete();
                
                $monto = Reserva::where('idTransaccion', $idPago)->sum('monto');
                
                $tt = Transaccion::where('id', $idPago)->first();
                if($monto > 0){
                    $pago = $this->TransbankController->initTransaction($monto, $tt->order, $idPago);
                }else{
                    $pago = null;
                }
                
                $d = DB::select("CALL Ges_Eco_restCarrito('".$request->sku."','".$estiloColor."',".$cant.")");               
                return ['status' => 0 ,'Pago' => $pago];
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
