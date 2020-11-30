@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INVENTARIO</h2>
        <form method="post" action="{{route('rf_igui_ubgfisica')}}">
            @csrf
            <h2>Ingrese el Nro de Inventario</h2>
            <input type="number" name="numeroInventario">
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
