@extends('layouts.plantillaMenu')

@section('title', 'Balance')

@section('content')

    <div class="p-5">

        <!-- TABLAS -->
        <div class="row">
            <!-- TABLA ENTRADA -->
            <div class="col">
                <div><h1 class="text-success">Todas tus entradas</h1></div>
                
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

            <!-- TABLA SALIDAS -->

            <div class="col">
                <div><h1 class="text-success">Todas tus salidas</h1></div>
                
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
        </div>

        <!-- GRAFICA -->

        <div class="row"></div>

    </div>
    
@endsection