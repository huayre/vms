@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON NORMAL</h2>
        <form method="post" action="{{route('rf_rn_informacion')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Ingrese Nueva Ubicación</h2>
            <input type="number" name="nuevaUbicacion">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
