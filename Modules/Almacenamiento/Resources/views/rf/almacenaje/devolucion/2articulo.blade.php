@extends('rf.rf')
@section('contenido')
    <div>
        <h2>DEVOLUCIONES</h2>
        <form method="post" action="{{route('rf_d_info')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Ingrese Código Artículo</h2>
            <input type="number" name="codArticulo">
            <br>
            <h2>Ingrese Cantidad Artículo</h2>
            <input type="number" name="cantidadArticulo">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
