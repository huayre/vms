@extends('rf.rf')
@section('contenido')
    <div>
        <h2>CARGA DE BULTOS</h2>
       <form method="post" action="{{route('rf_cod_bulto')}}">
           @csrf
           <h3>=============================================</h3>
           <h2>Ingrese Codigo De Bulto</h2>
           <input type="number" name="codigoBulto">
           <h3>=============================================</h3>
           <button type="submit">Aceptar</button>
           <button type="reset">Limpiar</button>
           <br>
           <br>
           <button>Salir</button>
       </form>
    </div>

@endsection
