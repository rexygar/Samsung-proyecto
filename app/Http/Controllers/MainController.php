<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaccion;
use App\Models\Reserva;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TransbankController;
use App\Models\Despacho;
use Illuminate\Support\Facades\Auth;
use App\Models\Direccion;
use App\Models\EstadoCompra;
use App\Models\Images;
use App\Models\Detalle;
use App\Models\no_usr;
use App\Models\retiro_local;
use App\Models\User;
use DataTables;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('bloqueo');
    }

    public function index()
    {
        $destacados = DB::select("CALL Ges_Eco_rescatarDestacados()");
        $oferta = DB::select("CALL Ges_Eco_rescatarOferta()");
        $imageSup = DB::table('images')->where('tipo', 'sliderSup')->take(3)->get();
        $imageInf = DB::table('images')->where('tipo', 'sliderInf')->take(3)->get();
        return view('Vistas.Index')->with(['oferta' => $oferta, 'destacados' => $destacados, 'imageSup' => $imageSup, 'imageInf' => $imageInf]);
    }

    public function search(Request $request)
    {

        $search = preg_replace('([^A-Za-z0-9 ])', '', trim($request->search));
        return redirect('/Search' . '/' . $search);
    }

    public function search2($search)
    {
        $dir = [];
        $productos = DB::select("CALL Ges_Eco_search('%" . $search . "%')");
        // return view('store.filtros')->with(['productos' => $productos, 'dir' => []]);
        array_push($dir, ['name' => $search, 'url' => URL('/') . '/Search' . '/' . $search]);
        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir]);
    }

    public function index2(Request $request)
    {
        if (Auth::user()->rol_id == '2' || Auth::user()->rol_id == '3') {
            $users = User::where('rol_id', 1)->count();
            if ($request->ajax()) {
                $estado = EstadoCompra::latest()->get();
                return DataTables::of($estado)->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $url = route('edit.estado');
                        $btn = '<form action="' . $url . '" method="GET">
                        <input type="hidden" name="id" value="' . $row->id . '">
                        <button type="submit" class="bg-yellow-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Ver</button>
                    </form>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('dashboard.dashboard', ['users' => $users]);
        }
        if (session()->has('idPago')) {
            $idPago = session('idPago');
            if ($idPago > 0) {
                return redirect()->route('carrito');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function getProductos1($superCategory)
    {

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('" . $superCategory . "','','','')");
        $dir = [];
        $image = DB::table('images')->where('subTipo', $superCategory)->take(1)->get();
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProductos2($superCategory, $category)
    {

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('" . $superCategory . "','" . $category . "','','')");
        $image = DB::table('images')->where('subTipo', $superCategory)->take(1)->get();
        $dir = [];

        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProductos3($superCategory, $category, $subCategory)
    {

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('" . $superCategory . "', '" . $category . "','" . $subCategory . "','')");
        $image = DB::table('images')->where('subTipo', $superCategory)->take(1)->get();

        $dir = [];
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProductos4($superCategory, $category, $subCategory, $other)
    {

        $productos = DB::select("CALL Ges_Eco_rescatarProducto('" . $superCategory . "', '" . $category . "','" . $subCategory . "','" . $other . "')");
        $image = DB::table('images')->where('subTipo', $superCategory)->take(1)->get();

        $dir = [];
        array_push($dir, ['name' => $superCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory]);
        array_push($dir, ['name' => $category, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category]);
        array_push($dir, ['name' => $subCategory, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory]);
        array_push($dir, ['name' => $other, 'url' => URL('/') . '/Categoria' . '/' . $superCategory . '/' . $category . '/' . $subCategory . '/' . $other]);

        return view('store.filtros')->with(['productos' => $productos, 'dir' => $dir, 'image' => $image]);
    }

    public function getProduct($sku)
    {
        $product = DB::select("CALL Ges_Eco_getProducto('" . $sku . "')");

        $product = $product[0];

        $super =    str_replace(' ', '_', ($product->SupCategoria     !== "SIN DEFINIR") ? $product->SupCategoria     : '_');
        $cate =     str_replace(' ', '_', ($product->Categoria        !== "SIN DEFINIR") ? $product->Categoria        : '_');
        $subCate =  str_replace(' ', '_', ($product->SubCategoria     !== "SIN DEFINIR") ? $product->SubCategoria     : '_');
        $subsub =   str_replace(' ', '_', ($product->SubSubCategoria  !== "SIN DEFINIR") ? $product->SubSubCategoria  : '_');
        $name =     str_replace(' ', '_', ($product->Descripcion      !== "SIN DEFINIR") ? $product->Descripcion      : '_');

        return redirect('/' . 'Categoria/' . $super . '/' . $cate . '/' . $subCate . '/' . $subsub . '/' . $name);
    }

    public function getProductOther($superCategory, $category, $subCategory, $other, $name)
    {

        $super =    str_replace('_', ' ', ($superCategory !== "_") ? $superCategory     : 'SIN DEFINIR');
        $cate =     str_replace('_', ' ', ($category      !== "_") ? $category          : 'SIN DEFINIR');
        $subCate =  str_replace('_', ' ', ($subCategory   !== "_") ? $subCategory       : 'SIN DEFINIR');
        $subsub =   str_replace('_', ' ', ($other         !== "_") ? $other             : 'SIN DEFINIR');
        $nom =      str_replace('_', ' ', ($name          !== "_") ? $name              : 'SIN DEFINIR');

        $product = DB::select("CALL Ges_Eco_getProducto2('" . $super . "', '" . $cate . "', '" . $subCate . "', '" . $subsub . "', '" . $nom . "')");


        $product = $product[0];

        $StockColor = DB::select("CALL `Ges_Eco_getStock`('" . $product->SKU . "')");
        return view('Vistas.producto', compact('product', 'StockColor'));
    }

    // REQUEST =  sku - cantidad (in aJAX)
    public function addCarrito(Request $request)
    {
        if ($request->ajax()) {
            try {
                $idPago = 0;
                if (session()->has('idPago')) {
                    $idPago = session('idPago');
                }

                $sku = (isset($request->sku) && $request->sku != null) ? $request->sku : '';
                $cant = (isset($request->cant) && $request->cant != null) ? $request->cant : 0;
                $color = (isset($request->col) && $request->col != null) ? $request->col : '';
                $monto = (isset($request->monto) && $request->monto != null) ? $request->monto : 0;
                $descripcion = (isset($request->descripcion) && $request->descripcion != null) ? $request->descripcion : '';
                $__token = $request->session()->token();

                if ($idPago > 0) {
                    $reserva = Reserva::where('sku', $sku)->where('Cod_EstiloColor', $color)->where('__token', $__token)->first();

                    if ($reserva !== null) {

                        $reserva->reserva = $cant + $reserva->reserva;
                        $reserva->monto = $monto;
                        $reserva->Total = ($monto * $reserva->reserva);
                        $reserva->save();

                        $get_detalle = Detalle::where('sku', $sku)->where('Cod_estiloColor', $color)->where('idTransaccion', $idPago)->first();
                        if ($get_detalle !== null) {
                            $get_detalle->monto_uni = $monto;
                            $get_detalle->total = ($monto * $reserva->reserva);
                            $get_detalle->Cantidad = $reserva->reserva;
                            $get_detalle->save();
                        }
                    } else {
                        //crear reserva
                        $reserva = new Reserva();
                        $reserva->sku = $sku;
                        $reserva->reserva = $cant;
                        $reserva->Cod_EstiloColor = $color;
                        $reserva->monto = $monto;
                        $reserva->Total = ($monto * $reserva->reserva);
                        $reserva->descripcion = $descripcion;
                        $reserva->idTransaccion = $idPago;
                        $reserva->__token = $__token;
                        $reserva->save();


                        //crear detalle
                        $detalle = new Detalle();
                        $detalle->sku = $sku;
                        $detalle->monto_uni = $monto;
                        $detalle->total = ($monto * $reserva->reserva);
                        $detalle->Cod_EstiloColor = $color;
                        $detalle->Cantidad = $reserva->reserva;
                        $detalle->idTransaccion = $idPago;
                        $detalle->save();
                    }
                } else {
                    $pago = new Transaccion();
                    $pago->save();
                    session(['idPago' => $pago->id]);
                    //crear reserva
                    $reserva = new Reserva();
                    $reserva->__token = $__token;
                    $reserva->sku = $sku;
                    $reserva->reserva = $cant;
                    $reserva->Cod_EstiloColor = $color;
                    $reserva->monto = $monto;
                    $reserva->Total = ($monto * $reserva->reserva);
                    $reserva->descripcion = $descripcion;
                    $reserva->idTransaccion = $pago->id;

                    $reserva->save();

                    //crear detalle
                    $detalle = new Detalle();
                    $detalle->sku = $sku;
                    $detalle->monto_uni = $monto;
                    $detalle->total = ($monto * $reserva->reserva);
                    $detalle->Cantidad = $color;
                    $detalle->idTransaccion = $pago->id;
                    $detalle->save();
                }

                $d = DB::select("CALL Ges_Eco_addCarrito('" . $reserva->sku . "','" . $reserva->Cod_EstiloColor . "'," . $reserva->reserva . ")");
                return ['status' => 0];
            } catch (\Throwable $th) {
                return ['status' => $th];
            }
        }
    }

    public function getCarrito()
    {
        $idPago = 0;
        $pago = [];
        $this->TransbankController = new TransbankController();
        if (session()->has('idPago')) {
            $idPago = session('idPago');
        } else {
            session(['idPago' => $idPago]);
        }
        $reserva = Reserva::where('idTransaccion', $idPago)->get();
        if (count($reserva) > 0) {
            if ($idPago > 0) {
                $monto = Reserva::where('idTransaccion', $idPago)->sum('Total');

                $order = '54879644';
                $pago = $this->TransbankController->initTransaction($monto, $order, $idPago);
            }
        } else {
            $pago = null;
        }
        $tiendas = DB::select("CALL Ges_getTiendas()");
        $direccion = null;
        if (Auth::check()) {
            $id = Auth::id();
            $direccion = Direccion::where('user_id', $id)->get();
        }
        $tipo_entrega = 0;
        if (session()->has('tipo_entrega')) {
        } else {
            session(['tipo_entrega' => $tipo_entrega]);
        }
        return view('Vistas.carritov2', ['reserva' => $reserva, 'pago' => $pago]);
    }

    public function getInitPago()
    {
        $idPago = 0;
        $pago = [];
        $this->TransbankController = new TransbankController();
        if (session()->has('idPago')) {
            $idPago = session('idPago');
        } else {
            session(['idPago' => $idPago]);
        }
        $reserva = Reserva::where('idTransaccion', $idPago)->get();
        if (count($reserva) > 0) {
            if ($idPago > 0) {
                $monto = Reserva::where('idTransaccion', $idPago)->sum('Total');

                $monto += intval(session('precio_comuna'));
                
                $s = strval($idPago);
                $order = $s;
                for ($i=10; $i > strlen($s); $i--) { 
                    $order = "0".$order;
                }
                
                $pago = $this->TransbankController->initTransaction($monto, $order, $idPago);
            }
        } else {
            $pago = null;
        }
        return view('prueba', ['pago' => $pago]);
    }

    public function getCarritoStepper()
    {
        $idPago = 0;
        $pago = [];
        $this->TransbankController = new TransbankController();
        if (session()->has('idPago')) {
            $idPago = session('idPago');
        } else {
            session(['idPago' => $idPago]);
        }
        $reserva = Reserva::where('idTransaccion', $idPago)->get();
        if (count($reserva) > 0) {
            if ($idPago > 0) {
                $monto = Reserva::where('idTransaccion', $idPago)->sum('Total');
                $order = '54879644';
                $pago = $this->TransbankController->initTransaction($monto, $order, $idPago);
            }
        } else {
            $pago = null;
        }
        $tiendas = DB::select("CALL Ges_getTiendas()");
        $direccion = null;
        if (Auth::check()) {
            $id = Auth::id();
            $direccion = Direccion::where('user_id', $id)->get();
        }
        $tipo_entrega = 0;
        if (session()->has('tipo_entrega')) {
        } else {
            session(['tipo_entrega' => $tipo_entrega]);
        }
        if ($pago == null) {
            return view('Vistas.carritov2', ['reserva' => $reserva, 'pago' => $pago]);
        } else {
            return view('Vistas.carritoStepper', ['reserva' => $reserva, 'pago' => $pago, 'tiendas' => $tiendas, 'direccion' => $direccion, 'tipo_entrega' => $tipo_entrega]);
        }
    }
    public static function getStepper()
    {
        // $idPago = 0;
        // $pago = [];
        // $this->TransbankController = new TransbankController();
        // if(session()->has('idPago')){
        //     $idPago = session('idPago');
        // }else{
        //     session(['idPago' => $idPago]);
        // }
        // $reserva = Reserva::where('idTransaccion', $idPago)->get();
        // if(count($reserva) > 0){
        //     if($idPago > 0){
        //         $monto = Reserva::where('idTransaccion', $idPago)->sum('Total');
        //         $order = '54879644';
        //         $pago = $this->TransbankController->initTransaction($monto,$order, $idPago);
        //     }
        // }else{
        //     $pago = null;
        // }
        $tiendas = DB::select("CALL Ges_getTiendas()");

        $direccion = null;
        if (Auth::check()) {
            $id = Auth::id();
            $direccion = Direccion::where('user_id', $id)->get();
        }

        // return view('Vistas.carritoStepper', ['reserva' => $reserva, 'pago' => $pago, 'tiendas' => $tiendas, 'direccion' => $direccion]);
        return view('Vistas.carritoStepper', ['tiendas' => $tiendas, 'direccion' => $direccion]);
    }

    // REQUEST =  sku (in aJAX)
    public function removeCarrito(Request $request)
    {
        if ($request->ajax()) {
            try {
                $idPago = session('idPago');

                $sku = (isset($request->sku) && $request->sku != null) ? $request->sku : '';

                $reserva = Reserva::where('idTransaccion', $idPago)->where('sku', $sku)->first();
                $estiloColor = $reserva->Cod_EstiloColor;
                $cant = $reserva->reserva;
                $reserva->delete();

                $monto = Reserva::where('idTransaccion', $idPago)->sum('monto');

                $tt = Transaccion::where('id', $idPago)->first();
                if ($monto > 0) {
                    $pago = $this->TransbankController->initTransaction($monto, $tt->order, $idPago);
                } else {
                    $pago = null;
                }

                $d = DB::select("CALL Ges_Eco_restCarrito('" . $request->sku . "','" . $estiloColor . "'," . $cant . ")");
                return ['status' => 0, 'Pago' => $pago];
            } catch (\Throwable $th) {
                return ['status' => 1];
            }
        }
    }
    public function addDireccion(Request $request)
    {
        if ($request->ajax()) {
            try {

                $idPago = session('idPago');

                if (Auth::check()) {
                    $id = Auth::id();
                    // $get_dir = Direccion::where('user_id', $id)->first();

                    $dir = new Direccion();
                    $direccion = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                    $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                    $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                    $detalle_1 = $request->detalle_1;
                    $detalle_2 = $request->detalle_2;

                    $dir->calle = $direccion;
                    $dir->numero = $detalle_1;
                    $dir->depto = $detalle_2;
                    $dir->user_id = $id;

                    $dir->nombre_despacho = $nom;
                    $dir->apellido_despacho = $apel;
                    $dir->save();
                    $id_dir = $dir->id;
                    $tipo_entrega = 1;
                    $get_detalle = Detalle::where('idTransaccion', $idPago)->first(); //busca los detalles con la id de pago
                    if ($get_detalle !== null) { //si no es nulo
                        // $get_detalle->id_CSL = $color;
                        $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();
                        // $updte_detalle = Detalle::whereIn('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->get(); //busca los detalles con la id de pago
                        // $updte_detalle->id_CSL = $color;

                        foreach ($udpte_detalle as $detalle) {
                            $detalle->id_CSL = null;
                            $detalle->id_usuario = $id;
                            $detalle->tipo_entrega = "Despacho a domicilio";
                            $detalle->id_direccion =  $id_dir;
                            $detalle->Cod_Tienda = null;
                            $detalle->id_retiro_local = null;
                            $detalle->save();
                        }
                        return ['message' => $udpte_detalle, 'triggerer' => $get_detalle];
                    }


                    if (session()->has('tipo_entrega')) {
                        session(['tipo_entrega' => $tipo_entrega]);
                    } else {
                        session(['tipo_entrega' => $tipo_entrega]);
                    }
                } else {
                    $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                    if ($usr_no_logeado == null) {
                        /////

                        $direccion = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                        $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                        $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                        $detalle_1 = $request->detalle_1;
                        $detalle_2 = $request->detalle_2;
                        $usr_no_logeado = new no_usr();
                        $usr_no_logeado->direccion = $direccion;
                        $usr_no_logeado->numero = $detalle_1;
                        $usr_no_logeado->detalle = $detalle_2;
                        $usr_no_logeado->nombre_despacho = $nom;
                        $usr_no_logeado->apellido_despacho = $apel;
                        $usr_no_logeado->tipo_entrega = "Despacho a domicilio";
                        $tipo_entrega = 1;
                        if (session()->has('tipo_entrega')) {
                            session(['tipo_entrega' => $tipo_entrega]);
                        } else {
                            session(['tipo_entrega' => $tipo_entrega]);
                        }

                        $usr_no_logeado->save();
                        $id_usr_csl = $usr_no_logeado->id;
                        //

                    } else {

                        $direccion = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                        $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                        $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                        $detalle_1 = $request->detalle_1;
                        $detalle_2 = $request->detalle_2;
                        $usr_no_logeado->direccion = $direccion;
                        $usr_no_logeado->numero = $detalle_1;
                        $usr_no_logeado->detalle = $detalle_2;
                        $usr_no_logeado->nombre_despacho = $nom;
                        $usr_no_logeado->apellido_despacho = $apel;
                        $usr_no_logeado->tipo_entrega = "Despacho a domicilio";
                        $tipo_entrega = 1;
                        if (session()->has('tipo_entrega')) {
                            session(['tipo_entrega' => $tipo_entrega]);
                        } else {
                            session(['tipo_entrega' => $tipo_entrega]);
                        }
                        $usr_no_logeado->save();
                        $id_usr_csl = $usr_no_logeado->id;


                        $get_detalle = Detalle::where('idTransaccion', $idPago)->first(); //busca los detalles con la id de pago
                        if ($get_detalle !== null) { //si no es nulo
                            // $get_detalle->id_CSL = $color;
                            $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();
                            // $updte_detalle = Detalle::whereIn('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->get(); //busca los detalles con la id de pago
                            // $updte_detalle->id_CSL = $color;
                            $id_dir = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                            foreach ($udpte_detalle as $detalle) {

                                $detalle->id_CSL = $id_usr_csl;
                                $detalle->id_usuario = null;
                                $detalle->tipo_entrega = "Despacho a domicilio";
                                $detalle->id_direccion =  null;
                                $detalle->Cod_Tienda = null;
                                $detalle->id_retiro_local = null;
                                $detalle->save();
                            }
                            return ['message' => $udpte_detalle, 'triggerer' => $get_detalle];
                        }
                    }
                }
                $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                // $get_detalle = no_usr::where('id_Usuario', $id)->first();


                return ['message' => session('tipo_entrega'), 'status' => 0];
            } catch (\Throwable $th) {
                return ['status' => $th];
            }
        }
    }
    public function cmbr_tienda(Request $request)
    {
        if ($request->ajax()) {
            try {
                $idPago = session('idPago');
                // return "estado 0";
                //crear



                if (Auth::check()) { //si el usr esta logeado
                    $id_usr = Auth::id(); //obten la id
                    $get_tienda = retiro_local::where('idTransaccion_FK', $idPago)->where('idUsuario_FK', $id_usr)->first(); //busca un retiro en tienda con el usuario
                    if ($get_tienda == null) { // y si retiro_local es null

                        $id_tienda = (isset($request->tienda) && $request->tienda != null) ? $request->tienda : '';
                        $get_tienda = new retiro_local(); //crea un nuevo retiro en tienda
                        $get_tienda->idTransaccion_FK = $idPago;
                        $get_tienda->idUsuario_FK = $id_usr;
                        $get_tienda->Cod_tienda_FK = $id_tienda;
                        $get_tienda->save(); //guardalo
                        $id_retiro = $get_tienda->id; //y obten la ultima id
                    } else { //si no
                        $id_tienda = (isset($request->tienda) && $request->tienda != null) ? $request->tienda : '';
                        $get_tienda->Cod_tienda_FK = $id_tienda; //actualiza la id de tienda en la que se retirara
                        $get_tienda->save();
                        $id_retiro = $get_tienda->id; //y obten la ultima id
                    }

                    $get_detalle = Detalle::where('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->first();
                    if ($get_detalle !== null) { //si no es nulo
                        $updte_detalle = Detalle::where('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->get(); //busca los detalles con la id de pago
                        // $updte_detalle->id_CSL = $color;
                        foreach ($updte_detalle as $detalle) {
                            $detalle->id_CSL = null;
                            $detalle->id_usuario = $id_usr;
                            $detalle->tipo_entrega = "Retiro en tienda";
                            $detalle->id_direccion = null;
                            $detalle->Cod_Tienda = $id_tienda;
                            $detalle->id_retiro_local = $id_retiro;
                            $detalle->save();
                        }
                        return dd($updte_detalle);
                        // $updte_detalle->update(['id_usuario' => $id_usr]);
                        // $updte_detalle->update(['tipo_entrega' => "Retiro en tienda"]);
                        // $updte_detalle->update(['id_direccion' => null]);
                        // $updte_detalle->update(['id_CSL' => null]);
                        // $updte_detalle->update(['id_retiro_local' => $id_retiro]);
                        // $updte_detalle->save(); //actualiza los valores (id_usuario,tipo_entrega,id_direccion,id_CSL,Cod_Tienda) y guarda

                    }
                } else {
                    $get_tienda = retiro_local::where('idTransaccion_FK', $idPago)->first();

                    if ($get_tienda == null) { //si el usr no esta logeado
                        /////
                        $id_tienda = (isset($request->tienda) && $request->tienda != null) ? $request->tienda : '';
                        $get_tienda = new retiro_local();
                        $get_tienda->idTransaccion_FK = $idPago;
                        $get_tienda->Cod_tienda_FK = $id_tienda;
                        $get_tienda->save();
                        $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                        if ($usr_no_logeado  !== null) {
                            $id_usr_no_logeado = $usr_no_logeado->id;
                            $get_tienda->idComprasinlogin_FK = $id_usr_no_logeado;
                            $get_tienda->save();
                            $id_retiro = $get_tienda->id;
                        }
                    } else {
                        $id_tienda = (isset($request->tienda) && $request->tienda != null) ? $request->tienda : '';
                        $get_tienda->Cod_tienda_FK = $id_tienda;
                        $get_tienda->save();
                        // return response()->json(['success' => 'Se ha actualizado correctamente']);
                        $id_retiro = $get_tienda->id;
                    }
                    $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                    $get_detalle = Detalle::where('idTransaccion', $idPago)->first();
                    if ($get_detalle != null) {

                        if ($usr_no_logeado != null) {
                            // $updte_detalle->id_CSL = $color;
                            // $updte_detalle = Detalle::whereIn('idTransaccion', $idPago)->get();
                            $id_usr_no_logeado = $usr_no_logeado->id;
                            $updte_detalle = Detalle::where('idTransaccion', $idPago)->get();

                            foreach ($updte_detalle as $detalle) {
                                $detalle->id_CSL = $id_usr_no_logeado;
                                $detalle->id_usuario = null;
                                $detalle->tipo_entrega = "Retiro en tienda";
                                $detalle->id_direccion = null;
                                $detalle->Cod_Tienda = $id_tienda;
                                $detalle->id_retiro_local = $id_retiro;
                                $detalle->save();
                            }
                        }
                    }
                }
                $tipo_entrega = 5;
                if (session()->has('tipo_entrega')) {
                    session(['tipo_entrega' => $tipo_entrega]);
                } else {
                    session(['tipo_entrega' => $tipo_entrega]);
                }
                return ['message' => session('tipo_entrega'), 'status' => 1];
            } catch (\Throwable $th) {

                return ['message' => $th, 'status' => 1];
            }
        }
    }

    public function mantener_comuna(Request $request){
        try {
            if($request->ajax()){
                $reg = (isset($request->reg) && $request->reg != null) ? $request->reg : '';
                $com = (isset($request->com) && $request->com != null) ? $request->com : '';

                $comuna = Despacho::where('comuna', $com)->first();
                $idPago = session('idPago');


                // session('precio_comuna')

                if(session()->has('precio_comuna')){
                    session(['precio_comuna' => $comuna->precio]);
                } else {
                    session(['precio_comuna' => $comuna->precio]);
                }

                return ['message' => $comuna->comuna, 'precio' => session('precio_comuna')];

            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function login_usr(Request $request)
    {
        $validar = $this->validate($request, [
            'correo_lgn' => 'required|email',
            'pwd_lgn' => 'required',
        ]);
        if ($validar) {

            if (\Auth::attempt([
                'email' => $request->correo_lgn,
                'password' => $request->pwd_lgn
            ], $request->remember == 'on' ? true : false)) {
                // $request->session()->regenerate();
                return back();
            } else {

                return back()->with('errorLog', 'El usuario y/o clave son incorrectas, vuelva a intentarlo.');
            }
        }
    }

    public function listProduct(Request $request)
    {
        if ($request->ajax()) {
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
    public function cmbr_dir(Request $request)
    {
        if ($request->ajax()) {
            if (Auth::check()) {
                $idPago = session('idPago');
                $id_usr = Auth::id();
                $get_detalle = Detalle::where('idTransaccion', $idPago)->first(); //busca los detalles con la id de pago
                if ($get_detalle !== null) { //si no es nulo
                    // $get_detalle->id_CSL = $color;
                    $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();
                    // $updte_detalle = Detalle::whereIn('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->get(); //busca los detalles con la id de pago
                    // $updte_detalle->id_CSL = $color;
                    $id_dir = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                    foreach ($udpte_detalle as $detalle) {
                        $detalle->id_CSL = null;
                        $detalle->id_usuario = $id_usr;
                        $detalle->tipo_entrega = "Despacho a domicilio";
                        $detalle->id_direccion =  $id_dir;
                        $detalle->Cod_Tienda = null;
                        $detalle->id_retiro_local = null;
                        $detalle->save();
                    }
                    return dd($udpte_detalle);
                }
            }
        }
        return view('dashboard.lista_Producto');
    }

    public function seguimiento(Request $request){
        try {
            if($request->ajax()){
                $ord = (isset($request->ord) && $request->ord != null) ? $request->ord : '';

                $despacho = Despacho::where('Ordentransporte', $ord)->get();

                return ['message' => 1, 'despacho' => $despacho];

            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
