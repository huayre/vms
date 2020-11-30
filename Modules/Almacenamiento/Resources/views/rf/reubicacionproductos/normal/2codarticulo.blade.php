@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON NORMAL</h2>
        <form method="post" action="{{route('rf_rn_tipostock')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Ingrese Codigo Atículo</h2>
            <input type="number" name="codArticulo">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
