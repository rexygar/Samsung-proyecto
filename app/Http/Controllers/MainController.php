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

        $destacados = DB::select("CALL Ges_Eco_rescatarDestacados()");

        $product = $product[0];

        $StockColor = DB::select("CALL `Ges_Eco_getStock`('" . $product->SKU . "')");
        $tiendaStock = DB::select("CALL `Ges_Eco_getTiendaStock`('" . $product->SKU . "')");
        
        return view('Vistas.producto', compact('product', 'StockColor', 'destacados'));
    }

    // REQUEST =  sku - cantidad (in aJAX)


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
                for ($i = 10; $i > strlen($s); $i--) {
                    $order = "0" . $order;
                }

                $pago = $this->TransbankController->initTransaction($monto, $order, $idPago);
            }
        } else {
            $pago = null;
        }
        return view('prueba', ['pago' => $pago]);
    }

    public function getSeguimiento()
    {
        return view('Tracing.seguimiento');
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

    // public function mantener_comuna(Request $request) metodo ya no usado; ver add direccion para encontrar el #'precio' => #session('precio_comuna')];
    // {
    //     try {
    //         if ($request->ajax()) {
    //             $reg = (isset($request->reg) && $request->reg != null) ? $request->reg : '';
    //             $com = (isset($request->com) && $request->com != null) ? $request->com : '';

    //             $comuna = Despacho::where('comuna', $com)->first();
    //             $idPago = session('idPago');


    //             // session('precio_comuna')

    //             if (session()->has('precio_comuna')) {
    //                 session(['precio_comuna' => $comuna->precio]);
    //             } else {
    //                 session(['precio_comuna' => $comuna->precio]);
    //             }

    //             return ['message' => $comuna->comuna, 'precio' => session('precio_comuna')];
    //         }
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //     }
    // }



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
    public function seguimiento(Request $request)
    {
        try {
            if ($request->ajax()) {
                $ord = (isset($request->ord) && $request->ord != null) ? $request->ord : '';

                $despacho = Despacho::where('Ordentransporte', $ord)->get();

                return ['message' => 1, 'despacho' => $despacho];
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
