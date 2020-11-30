@extends('rf.rf')
@section('contenido')
    <div>
        <h2>MENÚ ALMACENAJE</h2>
        <ol>
            <h3>=============================================</h3>
            <li><a href="{{route('rf_rn_codigo_ubicacion')}}">REUBICACIÓN NORMAL</a></li>
            <li><a href="{{route('rf_rm_opciones')}}">REUBICACIÓN MASIVA</a></li>
            <li><a href="{{route('rf')}}">SALIR</a></li>
            <h3>=============================================</h3>
        </ol>
    </div>

@endsection
