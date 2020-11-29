@extends('layouts.plantillaMenu')

@section('title', 'Registrar Salida')

@section('content')

    <h1>Registra tu salida</h1>

    <form action="{{ route('salidas.create.post') }}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
        <label for="">Tipo de Salida</label>
        <input type="text"
            class="form-control" name="tipoSalida" placeholder="Ej. Salario quincenal">
        </div>

        <div class="form-group">
            <label for="">Monto</label>
            <input type="number"
                class="form-control" name="montoSalida" placeholder="$0.00">
        </div>

        <div class="form-group">
            <label for="">Fecha</label>
            <input type="date"
                class="form-control" name="fechaSalida" placeholder="">
        </div>

        <div class="form-group">
            <label for="">Adjunta comprobante</label>
            <input type="file"
                class="form-control" name="fotoSalida" placeholder="">
        </div>

        <button type="submit" name="crearSalida" class="btn btn-primary btn-lg btn-block">Registrar Salida</button>

    </form>
    
@endsection