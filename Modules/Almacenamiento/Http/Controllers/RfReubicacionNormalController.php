<?php


namespace Modules\Almacenamiento\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RfReubicacionNormalController extends Controller
{
    public function codigoUbicacion()
    {
        return view('almacenaje::rf.reubicacionproductos.normal.1codubicacion');
    }

    public function codigoArticulo(Request $request)
    {
        $codUbicacion=$request->codUbicacion;
        return view('almacenaje::rf.reubicacionproductos.normal.2codarticulo');

    }

    public function tipoStock(Request $request)
    {
        $codArticulo=$request->codArticulo;
        return view('almacenaje::rf.reubicacionproductos.normal.3tipostock');
    }

    public function cantidadArticulo(Request $request)
    {
       $tipostock=$request->tipostock;
        return view('almacenaje::rf.reubicacionproductos.normal.4cantidadarticulo');
    }

    public function nuevaUbicacion(Request $request)
    {
        $cantidadArticulo=$request->cantidadArticulo;
        return view('almacenaje::rf.reubicacionproductos.normal.5nuevaubicacion');
    }

    public function informacion(Request $request)
    {
        $nuevaUbicacion=$request->nuevaUbicacion;
        return view('almacenaje::rf.reubicacionproductos.normal.6informacion');

    }


}
