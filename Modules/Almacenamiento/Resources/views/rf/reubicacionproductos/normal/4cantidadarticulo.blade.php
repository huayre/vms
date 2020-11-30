@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON NORMAL</h2>
        <form method="post" action="{{route('rf_rn_nuevaubicacion')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Ingrese Cantidad Atículo</h2>
            <input type="number" name="cantidadArticulo">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
