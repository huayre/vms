@extends('rf.rf')
@section('contenido')
    <div>
        <h2>ENTREGA</h2>
        <form method="post" action="{{route('rf_ev_detallepedido')}}">
            @csrf
            <h2>Ingrese Codigo Cliente</h2>
            <input type="number" name="codigoCliente">
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
