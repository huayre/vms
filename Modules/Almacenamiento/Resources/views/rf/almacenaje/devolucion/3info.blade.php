@extends('rf.rf')
@section('contenido')
    <div>
        <h2>ARTÍCULO NO CATALOGADO</h2>
        <h2>SCREW,MACHINE</h2>
        <h2>ALMACENAR EN :</h2>
        <h3>AFG-DFFGT</h3>
        <form method="post" action="{{route('rf_d_ubicacionfisica')}}">
            @csrf
            <h3>=============================================</h3>
            <h4>BODEGA: BR</h4>
            <h4>PATIO: 3</h4>
            <h4>CONTEN:A10</h4>
            <h4>COLUMNA:FF</h4>
            <h4>NIVEL:94</h4>
            <H4>CÓDIGO:O04I4994</H4>
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
        </form>
    </div>

@endsection
