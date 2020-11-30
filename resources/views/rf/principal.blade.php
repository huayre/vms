@extends('rf.rf')
@section('contenido')
    <div>
        <h2>MENU PRINCIPAL</h2>
        <ol>
            <li><a href="{{route('rf_recepcion')}}">RECEPCIÓN</a></li>
            <li><a href="{{route('rf_almacenamiento')}}">ALMACENAJE</a></li>
            <li><a href="{{route('rf_reubicacion')}}">REUBICACIÓN</a></li>
            <li><a href="{{route('rf_inventario')}}">INVENTARIO</a></li>
            <li><a href="{{route('rf_p_menu')}}">PEDIDOS</a></li>
            <li><a href="#">ENT. NO CATALOGADOS (no detalla en el documento)</a></li>
            <li><a href="#">CONSULTAS (no detalla en el documento)</a></li>
            <li><a href="#">SALIR</a></li>
        </ol>
    </div>

@endsection
