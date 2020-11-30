<?php


namespace Modules\Almacenamiento\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfReubicacionMasivaController extends Controller
{
  public function opciones()
  {
      return view('almacenaje::rf.reubicacionproductos.masiva.1opciones');
  }
    //Reubicacion Normal Retirar

  public function decision(Request $request)
  {
      $opcion=$request->opcion;
      if ($opcion==1){
          return view('almacenaje::rf.reubicacionproductos.masiva.2codubicacion');
      }
      return view('almacenaje::rf.reubicacionproductos.masiva.7_1codarticulo');

  }

  public function codigoArticulo(Request $request)
  {
      $codUbicacion=$request->codUbicacion;
      return view('almacenaje::rf.reubicacionproductos.masiva.3codarticulo');
  }

  public function codigoStock(Request $request)
  {
      $codigoArticulo=$request->rcodigoArticulo;
      return view('almacenaje::rf.reubicacionproductos.masiva.4tipostock');
  }

  public function CantidadArticulo(Request $request)
  {
      $tipostock=$request->tipostock;
      return view('almacenaje::rf.reubicacionproductos.masiva.5cantidadarticulo');
  }

  public function informacion(Request $request)
  {
      $cantidadArticulo=$request->cantidadArticulo;
      return view('almacenaje::rf.reubicacionproductos.masiva.6informacion');
  }
  //Reubicacion Normal Ubicar
    public function tipoStock(Request $request)
    {
        $codArticulo=$request->codArticulo;
        return view('almacenaje::rf.reubicacionproductos.masiva.8_1tipostock');
    }

    public function codUbicacion(Request $request)
    {
        $tipostock=$request->tipostock;

        return view('almacenaje::rf.reubicacionproductos.masiva.9_1codubicacion');
    }

    public function cantidadArticulo1(Request $request)
    {
        $codUbicacion=$request->codUbicacion;
        return view('almacenaje::rf.reubicacionproductos.masiva.10_1cantidadarticulo');
    }
    public function informacion1(Request $request)
    {
         $cantidadArticulo=$request->cantidadArticulo;
        return view('almacenaje::rf.reubicacionproductos.masiva.11_1informacion');
    }


}
