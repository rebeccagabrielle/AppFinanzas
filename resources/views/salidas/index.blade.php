@extends('layouts.plantillaMenu')

@section('title', 'Salidas')

@section('content')

    <div class="p-5">
        <h1>Todas tus salidas</h1>

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