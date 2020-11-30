<?php


namespace Modules\Recepcion\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RFIngresosnegativos extends Controller
{
    public function ingresosNegativos()
    {
        return view('recepcionarticulos::rf.recepcion.ingresosnegativos.1ordencompra');
    }
    public function Ordencompra(Request $request)
    {
        $ordenCompra=$request->ordenCompra;
        return view('recepcionarticulos::rf.recepcion.ingresosnegativos.2numitem');
    }
    public function NumeroItem(Request $request)
    {
        $numItem=$request->numItem;
       return view('recepcionarticulos::rf.recepcion.ingresosnegativos.3codubicacion');
    }
    public function CodigoUbicacion(Request $request)
    {
        $codUbicacion=$request->codUbicacion;
        return view('recepcionarticulos::rf.recepcion.ingresosnegativos.4cantidadrebajar');
    }
    public function cantidadRebajar(Request $request)
    {
        $codUbicacion=$request->cantidadRebajar;
        return view('recepcionarticulos::rf.recepcion.ingresosnegativos.5confirmacion');
    }
}
