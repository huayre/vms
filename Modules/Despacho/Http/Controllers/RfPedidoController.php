<?php


namespace Modules\Despacho\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfPedidoController extends Controller
{
  public function mayorprioridad()
  {
      return view('despacho::rf.pedidos.preparacion.1vistaprioridad');
  }

  public function aceptaPreparar()
  {
      return view('despacho::rf.pedidos.preparacion.3infopreparacion');
  }
  public function noaceptaPreparar()
  {
      return view('despacho::rf.pedidos.preparacion.2docpedido');
  }

  public function docPedido(Request $request)
  {
      $request->docPedido;
      return view('despacho::rf.pedidos.preparacion.3infopreparacion');
  }

  public function codubicacion()
  {
      return view('despacho::rf.pedidos.preparacion.4codubicacion');
  }

  public function pantallaInformacion(Request $request)
  {
      $request->codUbicacion;
      return view('despacho::rf.pedidos.preparacion.5informacion');
  }
  public function cantidadretirar()
  {
      return view('despacho::rf.pedidos.preparacion.6cantidadretirar');
  }
  public function procesoTerminado(Request $request)
  {
      $request->cantidadRetirar;
      return view('despacho::rf.pedidos.preparacion.7finproceso');
  }




}
