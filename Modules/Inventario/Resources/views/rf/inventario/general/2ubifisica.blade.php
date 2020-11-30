@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INVENTARIO</h2>
        <form method="post" action="{{route('rf_ig_articulo')}}">
            @csrf
            <h2>Ingrese Ubicación Fisica</h2>
            <input type="number" name="ubicacionFisica">
            <br>
            <br>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
