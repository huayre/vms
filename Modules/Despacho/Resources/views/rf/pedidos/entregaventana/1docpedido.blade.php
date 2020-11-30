@extends('rf.rf')
@section('contenido')
    <div>
        <h2>ENTREGA</h2>
        <form method="post" action="{{route('rf_ev_codcliente')}}">
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
