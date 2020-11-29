@extends('layouts.plantillaMenu')

@section('title', 'Salidas')

@section('content')

    <div class="p-5">
        <h1>Todas tus salidas</h1>
        <table class="table" id="table_id">

            <!-- Header tabla -->
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Monto</th>
            </tr>
            </thead>

            <!-- Body tabla -->

            <tbody>

            @foreach ($salidas as $salida)
            <tr>
                <th scope="row">{{$salida->id}}</th>
                <td>{{$salida->tipo}}</td>
                <td>{{$salida->fecha}}</td>
                <td>{{ number_format($salida->monto,2 )}}</td>
            </tr>
            
            @endforeach
            </tbody>

        </table>
    </div>

@endsection