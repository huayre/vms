<?php


namespace Modules\Despacho\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RFReingresoController extends Controller
{
    public function codigoArticulo()
    {
        return view('despacho::rf.pedidos.reingreso.1codarticulo');
    }

    public function informacion(Request $request)
    {
        $request->codigoArticulo;
        return view('despacho::rf.pedidos.reingreso.2informacion');
    }

}
