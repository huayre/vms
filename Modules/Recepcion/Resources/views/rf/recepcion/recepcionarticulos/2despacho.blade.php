@extends('rf.rf')
@section('contenido')
    <div>
        <h2>RECEPCIÓN DE ATÍCULO</h2>
       <form method="post" action="{{route('rf_guia_despacho')}}">
           @csrf
           <h3>=============================================</h3>
           <h2>Ingrese el N° de Guia Despacho</h2>
           <input type="number" name="guiaDespacho">
           <br>
           <h2>Ingrese Fecha Guia Despacho</h2>
           <input type="date" name="fechaGuiaDespacho">
           <h3>=============================================</h3>
           <button type="submit">Aceptar</button>
           <button type="reset">Limpiar</button>
           <br>
           <br>
           <button>Salir</button>
       </form>
    </div>

@endsection
