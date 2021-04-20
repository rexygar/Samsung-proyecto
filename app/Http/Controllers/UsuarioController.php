<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\no_usr;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function perfil()
    {
        $perfil = Perfil::where('user_id', Auth::user()->id)->first();

        return view('Vistas.perfiles', ['perfil' => $perfil]);
    }

    public function update_perfil(Request $request)
    {
        try {
            if ($request->ajax()) {
                $tel = (isset($request->tel) && $request->tel != null) ? $request->tel : '';
                $rut = (isset($request->rut) && $request->rut != null) ? $request->rut : '';
                $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                $usr = (isset($request->usr) && $request->usr != null) ? $request->usr : '';
                $perfil = Perfil::where('user_id', $usr)->first();
                if ($perfil == null || !isset($perfil->id)) {
                    $perfil = new Perfil();
                }
                    $perfil->telefono             = $tel;
                    $perfil->nombres            = $nom;
                    $perfil->apellidos          = $apel;
                    $perfil->rut                 = $rut;
                    $perfil->user_id            = $usr;
                    $perfil->save();
                    
                return ['message' => "Successful"];
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public static function crte_usr(Request $request)
    {
        try {
            if ($request->ajax()) {


                $id_pago  = session('idPago');
                $get_usr = no_usr::where('id_transaccion_FK', $id_pago)->first();
                if ($get_usr == false) {
                    $new_no_usr = new no_usr();
                    $rut = (isset($request->rut) && $request->rut != null) ? $request->rut : '';
                    $apel = (isset($request->apel) && $request->apel != null) ? $request->apel : '';
                    $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                    $num = strval((string) (isset($request->num) && $request->num != null) ? $request->num : '');
                    $email = (isset($request->email) && $request->email != null) ? $request->email : '';
                    $new_no_usr->nombres = $nom;
                    $new_no_usr->apellidos = $apel;
                    $new_no_usr->correo = $email;
                    $new_no_usr->rut = $rut;
                    $new_no_usr->Telefono = $num;
                    $new_no_usr->id_transaccion_FK = session('idPago');
                    $new_no_usr->save();
                }
                return ["message" => "Successful"];
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
