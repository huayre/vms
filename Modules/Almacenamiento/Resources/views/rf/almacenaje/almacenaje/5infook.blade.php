@extends('rf.rf')
@section('contenido')
    <div>
        <h2>ALMACENAMIENTO</h2>
        <h3>=============================================</h3>
        <h4>ALMACENAMIENTO OK !!</h4>
        <h4>ARTÍCULO ALMACENADO</h4>
        <h3>=============================================</h3>
        <form method="post" action="{{route('rf_a_finproceso')}}">
            @csrf
            <button type="submit">Aceptar</button>

        </form>
    </div>

@endsection
