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

class CarritoController extends Controller
{
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

                if ($idPago > 0) { //si id_pago mayor que 0
                    $reserva = Reserva::where('sku', $sku)->where('Cod_EstiloColor', $color)->where('__token', $__token)->first();

                    if ($reserva !== null) { //y reserva es distinto de nulo
                        //update reserva
                        $reserva->reserva = $cant + $reserva->reserva;
                        $reserva->monto = $monto;
                        $reserva->Total = ($monto * $reserva->reserva);
                        $reserva->save();
                        $idTransaccion = $reserva->idTransaccion;

                        //update detalle
                        $get_detalle = Detalle::where('sku', $sku)->where('Cod_estiloColor', $color)->where('idTransaccion', $idTransaccion)->first();
                        if ($get_detalle !== null) {
                            $get_detalle->monto_uni = $monto;
                            if (Auth::check()) {
                                $id_usr = Auth::id();

                                $get_detalle->id_Usuario = $id_usr;
                            } else {
                                $get_detalle->id_CSL = null;
                            }
                            $get_detalle->total = ($monto * $reserva->reserva);
                            $get_detalle->Cantidad = $reserva->reserva;
                            $get_detalle->save();
                        }

                        return ['triggerer' => $get_detalle, 'id' => 1];
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
                        $idTransaccion = $reserva->idTransaccion;

                        //crear detalle
                        $detalle = new Detalle();
                        $detalle->sku = $sku;
                        $detalle->monto_uni = $monto;
                        $detalle->total = ($monto * $reserva->reserva);
                        if (Auth::check()) {
                            $id_usr = Auth::id();

                            $detalle->id_Usuario = $id_usr;
                        } else {
                            $detalle->id_CSL = null;
                        }
                        $detalle->Cod_EstiloColor = $color;
                        $detalle->Cantidad = $reserva->reserva;
                        $detalle->idTransaccion = $idTransaccion;
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
                    if (Auth::check()) {
                        $id_usr = Auth::id();

                        $detalle->id_Usuario = $id_usr;
                    } else {
                        $detalle->id_CSL = null;
                    }
                    $detalle->monto_uni = $monto;
                    $detalle->total = ($monto * $reserva->reserva);
                    $detalle->Cod_EstiloColor = $color;
                    $detalle->Cantidad = $reserva->reserva;
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

        return view('Vistas.carritov2', ['reserva' => $reserva, 'pago' => $pago]);
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
        $precioDespacho = 0;

        if (session()->has('precio_comuna')) {

            $precioDespacho = session('precio_comuna');
        } else {
            session(['precio_comuna' => $precioDespacho]);
        }

        if ($pago == null) {
            return view('Vistas.carritov2', ['reserva' => $reserva, 'pago' => $pago]);
        } else {
            return view('Vistas.carritoStepper', ['reserva' => $reserva, 'pago' => $pago, 'tiendas' => $tiendas, 'direccion' => $direccion,   'precio_comuna' => $precioDespacho]);
        }
    }

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

                $direccion = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                $detalle_1 = $request->detalle_1;
                $detalle_2 = $request->detalle_2;
                $reg = (isset($request->reg) && $request->reg != null) ? $request->reg : '';
                $com = (isset($request->com) && $request->com != null) ? $request->com : '';


                if (Auth::check()) {
                    $id = Auth::id();
                    // $get_dir = Direccion::where('user_id', $id)->first();

                    $dir = new Direccion(); //crea direccion (n) del usuario


                    $detalle_1 = $request->detalle_1;
                    $detalle_2 = $request->detalle_2;

                    $dir->calle = $direccion;
                    $dir->region = $reg;
                    $dir->comuna = $com;
                    $dir->numero = $detalle_1;
                    $dir->depto = $detalle_2;
                    $dir->user_id = $id;

                    $dir->nombre_despacho = $nom;
                    $dir->apellido_despacho = $apel;
                    $dir->save();
                    $id_dir = $dir->id; //obtiene la direccion (n) del usuario




                    $get_detalle = Detalle::where('idTransaccion', $idPago)->first(); //busca los detalles con la id de pago

                    if ($get_detalle !== null) { //si no es nulo
                        $comuna = Despacho::where('comuna', $com)->first(); //busca si existe la comuna seleccionada
                        if ($comuna !== null) {
                            $p_Despacho = $comuna->precio; //si existe, le asigna el precio
                        } else {
                            $p_Despacho = session('precio_comuna');  // 0 por default
                        }
                        if (session()->has('precio_comuna')) {

                            session(['precio_comuna' => $p_Despacho]);
                        } else {
                            session(['precio_comuna' => $p_Despacho]);
                        }
                        // $get_detalle->id_CSL = $color;
                        $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();
                        // $updte_detalle = Detalle::whereIn('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->get(); //busca los detalles con la id de pago
                        // $updte_detalle->id_CSL = $color;

                        foreach ($udpte_detalle as $detalle) {
                            $detalle->id_CSL = null;
                            $detalle->id_Usuario = $id;
                            $detalle->tipo_entrega = "Despacho a domicilio";
                            $detalle->id_direccion =  $id_dir;
                            $detalle->valor_despacho =  $p_Despacho;
                            $detalle->Cod_Tienda = null;
                            $detalle->id_retiro_local = null;
                            $detalle->save();
                        }
                        return ['message' => $udpte_detalle, 'triggerer' => $get_detalle, 'id' => 1, 'precio_comuna' => $p_Despacho, 'direccion' => $dir];
                    }
                } else {
                    $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                    if ($usr_no_logeado === null) {
                        /////crear

                        $usr_no_logeado = new no_usr();
                        $usr_no_logeado->direccion = $direccion;
                        $usr_no_logeado->numero = $detalle_1;
                        $usr_no_logeado->detalle = $detalle_2;
                        $usr_no_logeado->nombre_despacho = $nom;
                        $usr_no_logeado->apellido_despacho = $apel;
                        $usr_no_logeado->region = $reg;
                        $usr_no_logeado->comuna = $com;
                        $usr_no_logeado->tipo_entrega = "Despacho a domicilio";
                        $usr_no_logeado->save();
                        $id_usr_csl = $usr_no_logeado->id;

                        $get_detalle = Detalle::where('idTransaccion', $idPago)->first(); //busca los detalles con la id de pago
                        $comuna = Despacho::where('comuna', $com)->first();
                        if ($comuna !== null) {
                            $p_Despacho = $comuna->precio; //si existe, le asigna el precio
                        } else {
                            $p_Despacho = session('precio_comuna'); // 0 por default
                        }
                        if (session()->has('precio_comuna')) {

                            session(['precio_comuna' => $p_Despacho]);
                        } else {
                            session(['precio_comuna' => $p_Despacho]);
                        }
                        if ($get_detalle !== null) { //si no es nulo
                            $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();
                            $id_dir = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                            foreach ($udpte_detalle as $detalle) {

                                $detalle->id_CSL = $id_usr_csl;
                                $detalle->id_Usuario = null;
                                $detalle->tipo_entrega = "Despacho a domicilio";
                                $detalle->id_direccion =  null;
                                $detalle->valor_despacho =  $p_Despacho;
                                $detalle->Cod_Tienda = null;
                                $detalle->region = $usr_no_logeado->region;
                                $detalle->comuna = $usr_no_logeado->comuna;

                                $detalle->id_retiro_local = null;
                                $detalle->save();
                            }
                        }
                        return ['message' => $udpte_detalle, 'triggerer' => $get_detalle, 'id' => 2, 'precio_comuna' => $p_Despacho];
                    } else {

                        $direccion = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                        $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                        $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                        $reg = (isset($request->reg) && $request->reg != null) ? $request->reg : '';
                        $com = (isset($request->com) && $request->com != null) ? $request->com : '';
                        //update
                        $detalle_1 = $request->detalle_1;
                        $detalle_2 = $request->detalle_2;
                        $usr_no_logeado->direccion = $direccion;
                        $usr_no_logeado->numero = $detalle_1;
                        $usr_no_logeado->detalle = $detalle_2;
                        $usr_no_logeado->nombre_despacho = $nom;
                        $usr_no_logeado->region = $reg;
                        $usr_no_logeado->comuna = $com;
                        $usr_no_logeado->apellido_despacho = $apel;
                        $usr_no_logeado->tipo_entrega = "Despacho a domicilio";
                        $usr_no_logeado->save();
                        $id_usr_csl = $usr_no_logeado->id;


                        $get_detalle = Detalle::where('idTransaccion', $idPago)->first(); //busca los detalles con la id de pago
                        $comuna = Despacho::where('comuna', $com)->first();
                        if ($comuna !== null) {
                            $p_Despacho = $comuna->precio; //si existe, le asigna el precio
                        } else {
                            $p_Despacho = session('precio_comuna');  // 0 por default
                        }
                        if (session()->has('precio_comuna')) {

                            session(['precio_comuna' => $p_Despacho]);
                        } else {
                            session(['precio_comuna' => $p_Despacho]);
                        }
                        if ($get_detalle !== null) { //si no es nulo
                            $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();

                            foreach ($udpte_detalle as $detalle) {

                                $detalle->id_CSL = $id_usr_csl;
                                $detalle->id_Usuario = null;
                                $detalle->tipo_entrega = "Despacho a domicilio";
                                $detalle->id_direccion =  null;
                                $detalle->valor_despacho =  $comuna->precio;
                                $detalle->Cod_Tienda = null;
                                $detalle->id_retiro_local = null;
                                $detalle->save();
                            }
                        }
                        return ['message' => $udpte_detalle, 'triggerer' => $get_detalle, 'id' => 3, 'precio_comuna' => $p_Despacho];
                    }
                }
                $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                // $get_detalle = no_usr::where('id_Usuario', $id)->first();


                return ['status' => 0];
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

                    $p_Despacho = 0;
                    if (session()->has('precio_comuna')) {

                        session(['precio_comuna' => $p_Despacho]);
                    } else {
                        session(['precio_comuna' => $p_Despacho]);
                    }

                    $get_detalle = Detalle::where('idTransaccion', $idPago)->first();


                    if ($get_detalle !== null) { //si no es nulo
                        $updte_detalle = Detalle::where('idTransaccion', $idPago)->get(); //busca los detalles con la id de pago

                        foreach ($updte_detalle as $detalle) {
                            $detalle->id_CSL = null;
                            $detalle->id_Usuario = $id_usr;
                            $detalle->tipo_entrega = "Retiro en tienda";
                            $detalle->valor_despacho =  $p_Despacho;
                            $detalle->id_direccion = null;
                            $detalle->Cod_Tienda = $id_tienda;
                            $detalle->id_retiro_local = $id_retiro;
                            $detalle->save();
                        }
                    }
                    return ['triggerer' => $updte_detalle, 'id' => $p_Despacho];
                    // return response()->json(array('msg' => $p_Despacho), 200);
                } else {
                    $get_tienda = retiro_local::where('idTransaccion_FK', $idPago)->first();

                    if ($get_tienda == null) { //si el usr no esta logeado

                        $id_tienda = (isset($request->tienda) && $request->tienda != null) ? $request->tienda : '';
                        $get_tienda = new retiro_local();
                        $get_tienda->idTransaccion_FK = $idPago;

                        $get_tienda->idTransaccion_FK = $idPago;
                        $get_tienda->Cod_tienda_FK = $id_tienda;
                        $get_tienda->save();
                        $usr_no_logeado = no_usr::where('id_transaccion_FK', $get_tienda->idTransaccion_FK)->first();
                        if ($usr_no_logeado  !== null) {
                            $id_usr_no_logeado = $usr_no_logeado->id;
                            $usr_no_logeado->direccion = null;
                            $usr_no_logeado->comuna = null;
                            $usr_no_logeado->region = null;
                            $usr_no_logeado->numero = null;
                            $usr_no_logeado->detalle = null;
                            $get_tienda->idComprasinlogin_FK = $id_usr_no_logeado;
                            $get_tienda->save();
                            $id_retiro = $get_tienda->id;
                        }
                    } else {
                        $id_tienda = (isset($request->tienda) && $request->tienda != null) ? $request->tienda : '';
                        $get_tienda->Cod_tienda_FK = $id_tienda;
                        $get_tienda->save();
                        $id_retiro = $get_tienda->id;

                        $usr_no_logeado = no_usr::where('id_transaccion_FK', $get_tienda->idTransaccion_FK)->first();
                        if ($usr_no_logeado  !== null) {

                            $usr_no_logeado->direccion = null;
                            $usr_no_logeado->comuna = null;
                            $usr_no_logeado->region = null;
                            $usr_no_logeado->numero = null;
                            $usr_no_logeado->tipo_entrega = "Retiro en tienda";
                            $usr_no_logeado->detalle = null;
                            $usr_no_logeado->save();
                        }

                        // return response()->json(['success' => 'Se ha actualizado correctamente']);


                    }
                    $usr_no_logeado = no_usr::where('id_transaccion_FK', $idPago)->first();
                    $get_detalle = Detalle::where('idTransaccion', $idPago)->first();
                    if ($get_detalle != null) {

                        if ($usr_no_logeado != null) {
                            $id_usr_no_logeado = $usr_no_logeado->id;
                            $usr_no_logeado->direccion = null;
                            $usr_no_logeado->comuna = null;
                            $usr_no_logeado->region = null;
                            $usr_no_logeado->numero = null;
                            $usr_no_logeado->detalle = null;
                            $usr_no_logeado->tipo_entrega = "Retiro en tienda";
                            $usr_no_logeado->save();
                            $p_Despacho = 0;
                            if (session()->has('precio_comuna')) {

                                session(['precio_comuna' => $p_Despacho]);
                            } else {
                                session(['precio_comuna' => $p_Despacho]);
                            }
                            $updte_detalle = Detalle::where('idTransaccion', $idPago)->get();

                            foreach ($updte_detalle as $detalle) {
                                $detalle->id_CSL = $id_usr_no_logeado;
                                $detalle->id_Usuario = null;
                                $detalle->tipo_entrega = "Retiro en tienda";
                                $detalle->id_direccion = null;
                                $detalle->valor_despacho =  $p_Despacho;
                                $detalle->Cod_Tienda = $id_tienda;
                                $detalle->id_retiro_local = $id_retiro;
                                $detalle->save();
                            }
                        }
                    }
                    return ['triggerer' => $updte_detalle, 'id' => $p_Despacho];
                    // return response()->json(array('msg' => $p_Despacho), 200);
                }

                return ['status' => 0];
            } catch (\Throwable $th) {
                return ['status' => $th];
            }
        }
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
                    $dir_com = $get_detalle->valor_despacho;
                    $udpte_detalle = Detalle::where('idTransaccion', $idPago)->get();
                    $comuna = Despacho::where('comuna', $dir_com)->first();

                    // $updte_detalle = Detalle::whereIn('idTransaccion', $idPago)->where('id_Usuario', $id_usr)->get(); //busca los detalles con la id de pago
                    // $updte_detalle->id_CSL = $color;
                    $id_dir = (isset($request->direccion) && $request->direccion != null) ? $request->direccion : '';
                    $p_Despacho = $comuna->precio;
                    foreach ($udpte_detalle as $detalle) {
                        $detalle->id_CSL = null;
                        $detalle->id_Usuario = $id_usr;
                        $detalle->tipo_entrega = "Despacho a domicilio";
                        $detalle->id_direccion =  $id_dir;
                        $detalle->valor_despacho =  $p_Despacho;
                        $detalle->Cod_Tienda = null;
                        $detalle->id_retiro_local = null;
                        $detalle->save();
                    }
                }
                return response()->json(array('msg' => $p_Despacho), 200);
            }
        }
        return view('dashboard.lista_Producto');
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
}
