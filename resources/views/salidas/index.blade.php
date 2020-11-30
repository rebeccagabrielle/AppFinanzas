@extends('layouts.plantillaMenu')

@section('title', 'Salidas')

@section('content')

    <div class="p-5">

        <div><h1 class="text-warning">Todas tus Salidas</h1></div>
        <div class="py-5"><a name="botoCrear" id="" class="btn btn-warning" href="{{ route('salidas.create.get') }}" role="button">Registrar Salida</a></div>

        <table class="table" id="table_id1">

            <!-- Header tabla -->
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto</th>
                    <th>Comprobante</th>
                </tr>
            </thead>

            <!-- Body tabla -->

            <tbody>

                @foreach ($salidas as $salida)
                <tr>
                <th scope="row">{{$salida->id}}</th>
                    
                    <td>{{$salida->tipo}}</td>
                    <td>{{$salida->fecha}}</td>
                    <td>{{$salida->monto}}</td>
                    <td>  
                        <img src="{{ URL::to('/') }}/images/{{$salida->file}}" style="width: 50px">
                    </td>
                </tr>
                
                @endforeach
            </tbody>

        </table>
    </div>

@endsection