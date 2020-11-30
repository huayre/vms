<?php


namespace Modules\Inventario\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfInventarioGeneralController extends Controller
{
  public function numeroInventario()
  {
      return view('inventario::rf.inventario.general.1numinventario');
  }
  public function ubicacionFisica(Request $request)
  {
      $request->numeroInventario;
      return view('inventario::rf.inventario.general.2ubifisica');
  }

  public function articulo(Request $request)
  {
      $request->ubicacionFisica;
      return view('inventario::rf.inventario.general.3articulo');
  }

  public function confirmacion(Request $request)
  {
      $request->codigoArticulo;
      $request->cantidadArticulo;
      return view('inventario::rf.inventario.general.4confirmacion');
  }

  public function aceptar()
  {
      return redirect()->route('rf_ig_numinventario');
  }

    public function rechaza()
    {
        return redirect()->route('rf_ig_numinventario');
    }

}
