<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function perfil(){
        $perfil = Perfil::where('user_id', Auth::user()->id)->first();

        return view('Vistas.perfiles', ['perfil' => $perfil]);
    }

    public function update_perfil(Request $request){
        try {
            if ($request->ajax()) {

                if (isset($request->id) && $request->id != '') {
                    $perfil = Perfil::where('id', $request->id)->first();
                } else {
                    $perfil = new Perfil();
                }

                $tel = (isset($request->tel) && $request->tel != null) ? $request->tel : '';
                $rut = (isset($request->rut) && $request->rut != null) ? $request->rut : '';
                $nom = (isset($request->pass) && $request->pass != null) ? $request->pass : '';
                $apel = (isset($request->pass) && $request->pass != null) ? $request->pass : '';

                $perfil->telefono             = $tel;
                $perfil->nombres            = $nom;
                $perfil->apellidos          = $apel;
                $perfil->rut                 = $rut;
                $perfil->user_id            = Auth::user()->id;
                $perfil->save();
                return ['message' => "Successful", 'id' => $perfil->id];
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
