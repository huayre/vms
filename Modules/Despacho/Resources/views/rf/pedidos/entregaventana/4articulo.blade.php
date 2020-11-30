@extends('rf.rf')
@section('contenido')
    <div>
        <h2>ENTREGA</h2>
        <form method="post" action="#">
            @csrf
            <h2>Ingrese Codigo de Articulo</h2>
            <input type="number" name="codigoArticulo">
            <br>
            <h2>Ingrese Cantidad Articulo</h2>
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
