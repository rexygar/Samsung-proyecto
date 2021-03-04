<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $destacados = DB::select("CALL Ges_Eco_rescatarDestacados");
        $oferta = DB::select("CALL Ges_Eco_rescatarOferta");
        return view('vistas.Index')->with(['oferta' => $oferta, 'destacados' => $destacados]);
    }
}
