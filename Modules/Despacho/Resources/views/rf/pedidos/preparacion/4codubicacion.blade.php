@extends('rf.rf')
@section('contenido')
    <div>
        <h2>PREPARACIÓN</h2>
        <form method="post" action="{{route('rf_p_pantallainformacion')}}">
            @csrf
            <h2>Ingrese Codigo Ubicación</h2>
            <input type="number" name="codUbicacion">
            <br>
            <br>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
