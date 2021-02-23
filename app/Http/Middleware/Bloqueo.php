<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Parametros;

class Bloqueo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $bloqueo = Parametros::where('Nombre','Bloqueo')->first();
        if($bloqueo !== null){
            if($bloqueo->Valor == '1'){
                return redirect()->route('Mantencion');
            }
        }
        return $next($request);
    }
}
