@extends('rf.rf')
@section('contenido')

    <div>
        <h3>=============================================</h3>
        <h3>¿Grabar Rebaja?</h3>
            <a href="{{route('rf_confirmar_ingreso_negativo')}}">Aceptar</a>
            <a href="#">Cancelar</a>
        <h3>=============================================</h3>
    </div>

@endsection
