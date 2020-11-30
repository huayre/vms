@extends('rf.rf')
@section('contenido')
    <div>
        <h2>PREPARACIÓN</h2>
        <form method="post" action="{{route('rf_p_detallepedido')}}">
            @csrf
            <h2>Ingrese Documento Pedido</h2>
            <input type="number" name="docPedido">
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
