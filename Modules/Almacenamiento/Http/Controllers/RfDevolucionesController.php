<?php


namespace Modules\Almacenamiento\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfDevolucionesController extends Controller
{
  public function numDocumento()
  {
      return view('almacenaje::rf.almacenaje.devolucion.1numarticulo');
  }

  public function articulo(Request $request)
  {
      $request->numDocumento;
      return view('almacenaje::rf.almacenaje.devolucion.2articulo');
  }

  public function informacion(Request $request)
  {
      $request->codArticulo;
      $request->cantidadArticulo;
      return view('almacenaje::rf.almacenaje.devolucion.3info');

  }

  public function ubicacionFisica(Request $request)
  {
      $request->ubicacionFisica;
      return view('almacenaje::rf.almacenaje.devolucion.4ubicacionfisica');

  }

  public function informacionOK()
  {
      return view('almacenaje::rf.almacenaje.devolucion.5infook');
  }

  public function preguntaProceso(){
      return view('almacenaje::rf.almacenaje.devolucion.6continuaproceso');
  }
}
