@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON NORMAL</h2>
        <form method="post" action="#">
            @csrf
            <h3>=============================================</h3>
            <h2>¿Grabar Reubicación?</h2>
            <h3>LUBRICANTES OIL,EN 1 TMB</h3>
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <a href="#">Cancela</a>

        </form>
    </div>

@endsection
