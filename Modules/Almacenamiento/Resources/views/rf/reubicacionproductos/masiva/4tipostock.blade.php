@extends('rf.rf')
@section('contenido')
    <div>
        <h2>REUBICACÍON MASIVA RETIRAR</h2>
        <form method="post" action="{{route('rf_rm_cantidadarticulo')}}">
            @csrf
            <h3>=============================================</h3>
            <h3>Seleccione tipo de Stock</h3>
            <h2>1-Stock Propio</h2>
            <h2>2-Stock Consigado</h2>
            <h2>3-Stock Catalogado</h2>
            <input type="number" name="tipostock">
            <h3>=============================================</h3>
            <button type="submit">Aceptar</button>
            <button type="reset">Limpiar</button>
            <br>
            <br>
            <button>Salir</button>
        </form>
    </div>

@endsection
