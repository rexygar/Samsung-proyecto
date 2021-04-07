<?php

namespace App\Http\Controllers;

use App\Models\Despacho;
use App\Models\EstadoCompra;
use App\Models\Images;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index(Request $request){
        if(Auth::user()->rol_id == '2' || Auth::user()->rol_id == '3'){
            $users = User::where('rol_id', 1)->count();
            
            if($request->ajax()){
                $estado = EstadoCompra::latest()->orderBy('created_at', 'ASC')->take(5)->get();
                return DataTables::of($estado)->addIndexColumn()
                ->addColumn('action', function ($row) {
                $url = route('edit.estado');
                $btn = '<form action="'. $url .'" method="GET">
                        <input type="hidden" name="id" value="' . $row->id . '">
                        <button type="submit" class="bg-yellow-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Ver</button>
                    </form>';
                return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
                }
            return view('dashboard.dashboard', ['users' => $users]);
        }else{
            return view('vistas.index');
        }
    }

    public function valida(){
        $valida = false;
        if(Auth::user()->rol_id == '2'){
            $valida = true;
        }
        return $valida;
    }

    public function list_estado(Request $request){
        if($request->ajax()){
            $estado = EstadoCompra::latest()->get();
            return DataTables::of($estado)->addIndexColumn()
            ->addColumn('action', function ($row) {
            $url = route('edit.estado');
            $btn = '<form action="'. $url .'" method="GET">
                    <input type="hidden" name="id" value="' . $row->id . '">
                    <button type="submit" class="bg-yellow-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Ver</button>
                </form>';
            return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
            }
        return view('dashboard.list_estado');
    }

    public function edit_estado(Request $request){
        $estado = EstadoCompra::where('id', $request->id)->first();

        return view('dashboard.edit_estado', ['estado' => $estado]);
    }

    public function update_estado(Request $request){
        try {
            if($request->ajax()){
                
                $id = (isset($request->id) && $request->id != null) ? $request->id : '';
                $obs = (isset($request->obs) && $request->obs != null) ? $request->obs : '';
                $ord = (isset($request->ord) && $request->ord != null) ? $request->ord : '';
                $est = (isset($request->est) && $request->est != null) ? $request->est : '';
                $idt =  (isset($request->idt) && $request->idt != null) ? $request->idt : '';

                $estado = EstadoCompra::where('id', $id)->first();
                if ($estado == null || !isset($estado->id)) {
                    $estado = new EstadoCompra();
                }

                $estado->observacion = $obs;
                $estado->ordenTransporte = $ord;
                $estado->estado = $est;
                $estado->idTransaccion = $idt;
                $estado->save();

                return ['message' => "Successful", 'id' => $estado->id];
            }
        } catch (\Throwable $th) {
            return "Error " + $th;
        }
    }

    public function listProduct(Request $request){
        
        if($request->ajax()){
            $product = DB::select("CALL Ges_Eco_AllProducts()");
            
            return DataTables::of($product)->make(true);
        
        }
        return view('dashboard.lista_Producto');
    }

    public function edit_slider(){
        return view('dashboard.edit_slider');
    }

    public function edit(){
        return view('dashboard.edit_index');
    }

    public function upload_slider(Request $request){
        
        $file = $request->file('slide');
        //obtenemos el nombre del archivo
        $nombre = time()."_".$file->getClientOriginalName();
        //eliminamos los espacios
        $nombre = str_replace(' ', '', $nombre);
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre, \File::get($file));
        
        $imagen = new Images;
        $imagen->imagen = $nombre;
        $imagen->tipo = $request->tipo;
        $imagen->save();
        return view('dashboard.edit_slider');
    }

    public function upload_images(Request $request){
        
        $file = $request->file('slide');
        //obtenemos el nombre del archivo
        $nombre = time()."_".$file->getClientOriginalName();
        //eliminamos los espacios
        $nombre = str_replace(' ', '', $nombre);
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre, \File::get($file));
        
        $imagen = new Images;
        $imagen->imagen = $nombre;
        $imagen->tipo = $request->tipo;
        if($request->tipo == "megaMenu"){
            $imagen->subTipo = $request->mega;
        }
        if($request->tipo == "header"){
            $imagen->subTipo = $request->headerCat;
        }
        if($request->tipo == "fondoEquipos"){
            $imagen->subtipo = $request->fondoEq;
        }
        $imagen->save();
        return view('dashboard.edit_index');
    }

    public function list_price(Request $request){
        if($request->ajax()){
            $product = Despacho::latest()->get();
            
            return DataTables::of($product)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $url = route('edit.price');
                $btn = '<form action="' . $url . '" method="GET">
                        <input type="hidden" name="id" value="' . $row->id . '">
                        <button type="submit" class="bg-yellow-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Ver</button>
                    </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        
        }
        return view('dashboard.lista_precio');
    }

    public function price(Request $request){
        $precio = Despacho::where('id', $request->id)->first();
        return view ('dashboard.precio_region')->with(['precio' => $precio]);
    }

    public function upload_price(Request $request){
        try {
            if($request->ajax()){

                $reg = (isset($request->reg) && $request->reg != null) ? $request->reg : '';
                $com = (isset($request->com) && $request->com != null) ? $request->com : '';
                $pre = (isset($request->pre) && $request->pre != null) ? $request->pre : '';

                $precio = Despacho::where('region', $reg)->where('comuna',$com)->first();
                if ($precio == null || !isset($precio->id)) {
                    $precio = new Despacho();
                }
                
                $precio->region = $reg;
                $precio->comuna = $com;
                $precio->precio = $pre;
                $precio->save();

                return ['message' => "Successful", 'id' => $precio->id];
            }
        } catch (\Throwable $th) {
            return "Error " + $th;
        }
    }

    public function list_user(Request $request){

        if(!$this->valida()){
            return redirect('/adminPanel');
        }

            if($request->ajax()){
                $user = User::latest()->where('rol_id', 3)->get();
                
                return DataTables::of($user)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $url = route('edit.user');
                    $btn = '<form action="' . $url . '" method="GET">
                            <input type="hidden" name="id" value="' . $row->id . '">
                            <div class="grid grid-cols-12">
                                <div class="col-span-6"><button type="submit" 
                                        class="bg-yellow-500 flex justify-center items-center w-full text-white rounded-md focus:outline-none">
                                        Ver</button> </div>
                                <div class="col-span-6">
                                    <button type="button" id="' . $row->id . '"
                                    class="bg-red-700 flex justify-center items-center w-full text-white rounded-md focus:outline-none"
                                    onclick="openModal(' . $row->id . ')">Eliminar</button> </div>
                            </div>
                             
                            </form>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
            
            }
            return view('dashboard.list_user');
    }

    public function user(Request $request){
        $user = User::where('id', $request->id)->first();
        return view ('dashboard.user_admin')->with(['user' => $user]);
    }

    public function upload_user(Request $request){
        try {
            if($request->ajax()){

                $nom = (isset($request->nom) && $request->nom != null) ? $request->nom : '';
                $cor = (isset($request->cor) && $request->cor != null) ? $request->cor : '';

                $user = User::where('name', $nom)->where('email',$cor)->first();
                if ($user == null || !isset($user->id)) {
                    $user = new User();
                }
                
                $user->name = $nom;
                $user->email = $cor;
                $user->password = Hash::make($nom.'123');
                $user->rol_id = 3;
                $user->save();

                return ['message' => "Successful", 'id' => $user->id];
            }
        } catch (\Throwable $th) {
            return "Error " + $th;
        }
    }

    public function delete_user(Request $request)
    {
        $users = User::findOrFail($request->id);
        
        $users->delete();
        return back()->with('alert-danger', 'Usuario eliminado exitosamente');
    }
}
