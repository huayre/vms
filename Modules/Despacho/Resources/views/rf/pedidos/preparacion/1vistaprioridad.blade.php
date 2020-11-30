@extends('rf.rf')
@section('contenido')
    <div>
       <h3>¿ PREPARA ESTE PEDIDO ?</h3>
        <h3>====================================</h3>
         <h4>DOCTO. 0384744</h4>
        <h4>Listo para preparar</h4>
        <h3>====================================</h3>
        <a href="{{route('rf_p_aceptapreparar')}}">ACEPTA</a>
        <br>
        <br>
        <a href="{{route('rf_p_noaceptapreparar')}}">CANCELA</a>
    </div>

@endsection
