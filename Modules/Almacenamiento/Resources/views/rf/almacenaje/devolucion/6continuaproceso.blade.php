@extends('rf.rf')
@section('contenido')
    <div>
        <h2>¿CIERRA EL PROCESOS DE DEVOLUCIÓN?</h2>
        <h3>=============================================</h3>
        <form method="post" action="{{route('rf_a_articulo')}}">
            @csrf

            <a href="{{route('rf_d_numdocumento')}}">ACEPTA</a>
            <br>
            <br>
           <button type="submit">CANCELA</button>
        </form>
        <h3>=============================================</h3>
    </div>

@endsection
