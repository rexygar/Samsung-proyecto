<?php

namespace App\Http\Controllers;

use App\Models\Despacho;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index(){
        if(Auth::user()->rol_id == '2'){
            return view('dashboard.dashboard');
        }else{
            return view('vistas.index');
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
}
