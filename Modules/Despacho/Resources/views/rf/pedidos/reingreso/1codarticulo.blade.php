@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REINGRESO</h2>
        <form method="post" action="{{route('rf_ra_info')}}">
            @csrf
            <h2>Ingrese Codigo de Articulo</h2>
            <input type="number" name="codigoArticulo">
            <br>
            <br>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>

            <button>Salir</button>
        </form>
    </div>

@endsection
