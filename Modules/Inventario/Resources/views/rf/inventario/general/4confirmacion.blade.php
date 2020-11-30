@extends('rf.rf')
@section('contenido')
    <div>
        <h2>INVENTARIO</h2>
        <h2>¿GRABA INVENTARIO?</h2>
       <a href="{{route('rf_ig_acepta')}}">ACEPTA</a>
       <a href="{{route('rf_ig_rechaza')}}">CANCELA</a>
    </div>

@endsection
