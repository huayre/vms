<?php


namespace Modules\Recepcion\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfRecepcionController extends Controller
{
    public function recepcion()
    {
        return view('recepcionarticulos::rf.recepcion.recepcionarticulos.1ordencompra');
    }

    public function ordenCompra(Request $request)
    {
        $ordenCompra=$request->ordenCompra;
        return view('recepcionarticulos::rf.recepcion.recepcionarticulos.2despacho');
    }

    public function GuiaDespacho(Request $request)
    {
      $guiaDespacho=$request->guiaDespacho;
      $fechaGuiaDespacho=$request->fechaGuiaDespacho;
       return view('recepcionarticulos::rf.recepcion.recepcionarticulos.3codigobulto');
    }

    public function codigoBulto(Request $request)
    {
        $codigoBulto=$request->codigoBulto;
       return view('recepcionarticulos::rf.recepcion.recepcionarticulos.4articulo');
    }

    public function Articulo(Request $request)
    {
        $codigoArticulo=$request->codigoArticulo;
         $cantidadArtículo=$request->cantidadArtículo;
         $cantidadArtículoenOrdenCompra=0;
         if ($cantidadArtículo>$cantidadArtículoenOrdenCompra){


         }


    }


}
