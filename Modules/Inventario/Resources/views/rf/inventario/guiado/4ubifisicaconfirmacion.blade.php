@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INVENTARIO</h2>
        <form method="post" action="{{route('rf_igui_articulo')}}">
            @csrf
            <h2>Ingrese Ubicación Fisica Actual</h2>
            <input type="number" name="ubicacionFisicaConfirmacion">
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
