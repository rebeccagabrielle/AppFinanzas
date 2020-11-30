@extends('layouts.plantillaMenu')

@section('title', 'Entradas')

@section('content')

    <div class="p-5">

        <div><h1 class="text-success">Todas tus entradas</h1></div>
        <div class="py-5"><a name="botoCrear" id="" class="btn btn-success" href="{{ route('entradas.create.get') }}" role="button">Registrar Entrada</a></div>
        
        <table class="table" id="table_id2">

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

                @foreach ($entradas as $entrada)
                <tr>
                <th scope="row">{{$entrada->id}}</th>
                    
                    <td>{{$entrada->tipo}}</td>
                    <td>{{$entrada->fecha}}</td>
                    <td>{{$entrada->monto}}</td>
                    <td>  
                        <img src="{{ URL::to('/') }}/images/{{$entrada->file}}" style="width: 50px">
                    </td>
                </tr>
                
                @endforeach
            </tbody>
            
        </table>

    </div>
    
@endsection