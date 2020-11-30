@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INVENTARIO</h2>
        <ol>
            <li><a href="{{route('rf_ig_numinventario')}}">INVENTARIO GENERAL Y UBICACIONES</a></li>
            <li><a href="{{route('rf_igui_numinventario')}}">INVENTARIO GUIADO</a></li>
            <li><a href="#">SALIR</a></li>
        </ol>
    </div>

@endsection
