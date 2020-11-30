@extends('layouts.plantillaMenu')
@section('title', 'Balance')
@section('content')
    <div class="p-5">

        <!-- TABLAS -->
        <div><h1 class="text-primary">Balance mensual</h1></div>       
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <!-- Header tabla -->
                    <thead>
                        <tr>
                            <th scope="col">Tipo de entrada</th>
                            <th scope="col">Monto</th>
                        </tr>
                    </thead>
                    <!-- Body tabla -->
                    <tbody>
                        @foreach ($entradas as $e)
                        <tr>
                            <td>{{$e->tipo}}</td>
                            <td>${{number_format($e->monto,2)}}</td>
                        </tr>              
                        @endforeach
                    </tbody>        
                </table>        
            </div>
            <div class="col-md-6">
                <table class="table">
                    <!-- Header tabla -->
                    <thead>
                        <tr>
                            <th scope="col">Tipo salida</th>
                            <th scope="col">Monto</th>
                        </tr>
                    </thead>
                    <!-- Body tabla -->
                    <tbody>
                        @foreach ($salidas as $s)
                        <tr>
                            <td>{{$s->tipo}}</td>
                            <td>${{number_format($s->monto,2)}}</td>
                        </tr>              
                        @endforeach 
                    </tbody>        
                </table>
            </div>
        </div>
        <div class="container">
            <h4>Total entradas: ${{ number_format($resultados->entradas,2) }}</h4>
            <h4>Total salidas: ${{ number_format($resultados->salidas,2) }}</h4>
            <br>
            <h4>Total: ${{ number_format($resultados->resultado,2) }}</h4>

        </div>
        <!-- GRAFICA -->
        <div class="row"></div>

    </div>
    
@endsection