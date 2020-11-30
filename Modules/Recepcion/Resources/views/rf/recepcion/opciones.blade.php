@extends('rf.rf')
@section('contenido')
    <div>
        <h2>RECEPCIÓN</h2>
        <ol>
            <h3>=============================================</h3>
            <li><a href="{{route('rf_orden_compra')}}">RECEPCIÓN DE ARTÍCULOS</a></li>
            <li><a href="{{route('rf_carga_bulto_transporte')}}">CARGAR BULTOS A TRANSPORTE</a></li>
            <li><a href="{{route('rf_n_ingresos_negativos')}}">INGRESOS NEGATIVOS</a></li>
            <li><a href="{{route('rf')}}">SALIR</a></li>
            <h3>=============================================</h3>
        </ol>
    </div>

@endsection
