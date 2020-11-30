@extends('rf.rf')
@section('contenido')
    <div>
        <h2>RECEPCIÓN DE ATÍCULO</h2>
       <form method="post" action="{{route('rf_recepcion_orden')}}">
           @csrf
           <h3>=============================================</h3>
           <h2>Ingrese el N° de Orden de Compra</h2>
           <input type="number" name="ordenCompra">
           <h3>=============================================</h3>
           <button type="submit">Aceptar</button>
           <button type="reset">Limpiar</button>
           <br>
           <br>
           <button>Salir</button>
       </form>
    </div>

@endsection
