<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Faker\Provider\Image;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function listProduct(Request $request){
        
        if($request->ajax()){
            $product = DB::select("CALL Ges_Eco_AllProducts()");
            
            return DataTables::of($product)->make(true);
        
        }
        return view('dashboard.lista_Producto');
    }

    public function upload_slider(Request $request){
        if ($request->ajax()) {
            try {
                if (isset($request->id) && $request->id != '') {
                    $imagen = Images::where('id', $request->id)->first();
                } else {
                    $imagen = new Images();
                }
                $formData = (isset($request->formData) && $request->formData != null) ? $request->formData : '';
                $slider = (isset($request->slider) && $request->slider != null) ? $request->slider : '';
                return ['message' => "Successful"];

            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
}
