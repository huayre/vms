@extends('rf.rf')
@section('contenido')
    <div>
        <h2>IVENTARIAR</h2>
        <h3>Nombre Artículo,EN </h3>
        <h3>IR A</h3>
        <h3>UBICACION CODIGO UBICACION</h3>
        <form method="post" action="{{route('rf_igui_ubgfisicaconfirmacion')}}">
            @csrf
            <h4>BODEGA: BR</h4>
            <h4>PATIO: 3</h4>
            <h4>CONTENED:A10</h4>
            <h4>COLUMNA:FF</h4>
            <h4>NIVEL:98</h4>
            <H4>CÓD. ART. :O04I4994</H4>
            <button type="submit">Aceptar</button>
        </form>
    </div>

@endsection
