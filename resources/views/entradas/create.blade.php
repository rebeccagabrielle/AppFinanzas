@extends('layouts.plantillaMenu')

@section('title', 'Registrar Entrada')

@section('content')

    <h1>Registra tu entrada</h1>

    <form action="{{ route('entradas.create.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="">Tipo de entrada</label>
        <input type="text"
            class="form-control" name="tipoEntrada" placeholder="Ej. Salario quincenal">
        </div>

        <div class="form-group">
            <label for="">Monto</label>
            <input type="number"
                class="form-control" name="montoEntrada" placeholder="$0.00">
        </div>

        <div class="form-group">
            <label for="">Fecha</label>
            <input type="date"
                class="form-control" name="fechaEntrada" placeholder="">
        </div>

        <div class="form-group">
            <label for="">Adjunta comprobante</label>
            <input type="file"
                class="form-control" name="fotoEntrada" placeholder="">
        </div>

        <button type="submit" name="crearEntrada" class="btn btn-primary btn-lg btn-block">Registrar Entrada</button>

    </form>
    
@endsection