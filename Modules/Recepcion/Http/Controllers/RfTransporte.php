<?php


namespace Modules\Recepcion\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RfTransporte extends Controller
{
      public function transporte()
      {
          return view('recepcionarticulos::rf.recepcion.transporte.1codtransporte');
      }

      public function codigoTransporte(Request $request)
      {
          $codigoTransporte=$request->codigoTransporte;
          return view('recepcionarticulos::rf.recepcion.transporte.2codtransportista');
      }

      public function codigoTransportista(Request $request)
      {
        $codigoTransportista=$request->codigoTransportista;

        return view('recepcionarticulos::rf.recepcion.transporte.3codbulto');
      }
      public function codigoBulto(Request $request)
      {
          $codigoTransportista=$request->codigoBulto;
          return view('recepcionarticulos::rf.recepcion.transporte.4bultocargado');
      }

}
