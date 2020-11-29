@extends('layouts.plantillaMenu')

@section('title', 'Entradas')

@section('content')

    <div class="p-5">

        <div><h1 class="text-success">Todas tus entradas</h1></div>
        <div class="py-5"><a name="botoCrear" id="" class="btn btn-success" href="{{ route('entradas.create.get') }}" role="button">Registrar Entrada</a></div>
        
        <table class="table">

            <!-- Header tabla -->
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>

            <!-- Body tabla -->

            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        
            </tbody>
            
        </table>

    </div>
    
@endsection