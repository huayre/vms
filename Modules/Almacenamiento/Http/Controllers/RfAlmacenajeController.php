<?php


namespace Modules\Almacenamiento\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfAlmacenajeController extends Controller
{
  public function codigoBulto()
  {
      return view('almacenaje::rf.almacenaje.almacenaje.1codbulto');
  }

  public function articulo(Request $request)
  {
      $request->codigoBulto;
      return view('almacenaje::rf.almacenaje.almacenaje.2articulo');
  }
  public function informacion(Request $request)
  {
      $request->codigoArticulo;
      $request->cantidadArticulo;
        return view('almacenaje::rf.almacenaje.almacenaje.3info');

  }

  public function ubicacion()
  {
      return view('almacenaje::rf.almacenaje.almacenaje.4ubicfisica');
  }
  public function InfoOK(Request $request)
  {
      $request->ubicacionFisica;
      return view('almacenaje::rf.almacenaje.almacenaje.5infook');
  }

  public function finProceso()
  {
      return redirect()->route('rf_almacenamiento');
  }
}
