@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON NORMAL</h2>
        <form method="post" action="{{route('rf_rm_decision')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Seleccione:</h2>
            <h2>1-Retirar</h2>
            <h2>2-Ubicar</h2>
            <input type="number" name="opcion">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>

            <button>Salir</button>
        </form>
    </div>

@endsection
