@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON MASIVA RETIRAR</h2>
        <form method="post" action="{{route('rf_rm_codarticulo')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Ingrese Codigo Ubicación</h2>
            <input type="number" name="codUbicacion">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
