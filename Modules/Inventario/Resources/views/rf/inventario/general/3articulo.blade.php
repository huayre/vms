@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INVENTARIO</h2>
        <form method="post" action="{{route('rf_ig_confirmacion')}}">
            @csrf
            <h2>Ingrese Codigo Artículo</h2>
            <input type="number" name="codigoArticulo">
            <br>
            <h2>Ingrese Cantidad Artículo</h2>
            <input type="number" name="cantidadArticulo">
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
