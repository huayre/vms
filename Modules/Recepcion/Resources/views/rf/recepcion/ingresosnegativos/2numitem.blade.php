@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INGRESOS NEGATIVOS</h2>
       <form method="post" action="{{route('rf_n_num_item')}}">
           @csrf
           <h3>=============================================</h3>
           <h2>Ingrese el Número de Item</h2>
           <input type="number" name="numItem">
           <h3>=============================================</h3>
           <button type="submit">Aceptar</button>
           <button type="reset">Limpiar</button>
           <br>
           <br>
           <button>Salir</button>
       </form>
    </div>

@endsection
