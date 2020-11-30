@extends('rf.rf')
@section('contenido')
    <div>
        <h2>DEVOLUCIONES</h2>
        <form method="post" action="{{route('rf_d_infook')}}">
            @csrf
            <h3>=============================================</h3>
            <h2>Ingrese Ubicación Fisica</h2>
            <input type="number" name="ubicacionFisica">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
