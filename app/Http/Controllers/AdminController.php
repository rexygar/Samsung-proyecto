<?php

namespace App\Http\Controllers;

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
        $imagen->save();
        return view('dashboard.edit_index');
    }

    
}
