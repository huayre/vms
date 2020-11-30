@extends('rf.rf')
@section('contenido')
    <div>
        <h2>RECEPCIÓN DE ATÍCULO</h2>
       <form method="post" action="{{route('rf_articulo')}}">
           @csrf
           <h3>=============================================</h3>
           <h2>Ingrese Codigo Artículo</h2>
           <input type="number" name="codigoArticulo">

           <br>
           <h2>Ingrese Cantidad Artículo</h2>
           <input type="number" name="cantidadArtículo">
           <h3>=============================================</h3>
           <button type="submit">Aceptar</button>
           <button type="reset">Limpiar</button>
           <br>
           <br>
           <button>Salir</button>
       </form>
    </div>

@endsection
