@extends('rf.rf')
@section('contenido')
    <div>

        <ol>
            <h2>MENÚ PEDIDOS</h2>
            <li><a href="{{route('rf_p_mayorprioridad')}}">PREPARACIÓN DE PEDIDOS</a></li>
            <li><a href="{{route('rf_ev_docpedido')}}">ENTREGA EN VENTANA</a></li>
            <li><a href="{{route('rf_ra_codarticulo')}}">REINGRESO DE ARTÍCULOS</a></li>
            <li><a href="#">SALIR</a></li>
        </ol>
    </div>

@endsection
