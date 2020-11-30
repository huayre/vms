<?php


namespace Modules\Inventario\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfInventarioGuiadoController extends Controller
{
   public  function numeroInventario()
   {
       return view('inventario::rf.inventario.guiado.1numinventario');
   }
   public function ubicacionFisica(Request $request)
   {
       $request->numeroInventario;
       return view('inventario::rf.inventario.guiado.2ubifisica');
   }

   public  function informacion(Request $request)
   {
       $request->ubicacionFisica;
       return view('inventario::rf.inventario.guiado.3info');
   }

   public function ubicacionFisicaConfirmacion()
   {
       return view('inventario::rf.inventario.guiado.4ubifisicaconfirmacion');
   }

   public function articulo(Request $request)
   {
       $request->ubicacionFisicaConfirmacion;
       return view('inventario::rf.inventario.guiado.5articulo');
   }
}
