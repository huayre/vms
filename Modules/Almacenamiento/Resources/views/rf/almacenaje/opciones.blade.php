@extends('rf.rf')
@section('contenido')
    <div>
        <h2>MENÚ ALMACENAJE</h2>
        <ol>
            <h3>=============================================</h3>
            <li><a href="#">CHEQUEO DE BULTOS (No detalla en el documento)</a></li>
            <li><a href="{{route('rf_a_codigobulto')}}">ALMACENAMIENTO DE ARTÍCULOS</a></li>
            <li><a href="{{route('rf_d_numdocumento')}}">DEVOLUCIONES</a></li>
            <li><a href="{{route('rf')}}">SALIR</a></li>
            <h3>=============================================</h3>
        </ol>
    </div>

@endsection
