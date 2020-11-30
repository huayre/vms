<?php


namespace Modules\Despacho\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfEntegraVentanaController extends Controller
{
  public function documentoPedido()
  {
      return view('despacho::rf.pedidos.entregaventana.1docpedido');
  }

  public function codCliente(Request $request)
  {
      $request->docPedido;
      return view('despacho::rf.pedidos.entregaventana.2codcliente');
  }

  public function detallePedido(Request $request)
  {
      $request->codigoCliente;
      return view('despacho::rf.pedidos.entregaventana.3detallepedido');
  }

  public function articulo()
  {
      return view('despacho::rf.pedidos.entregaventana.4articulo');
  }
}
