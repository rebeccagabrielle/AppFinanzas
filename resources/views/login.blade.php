@extends('layouts.plantilla')
@section('title', 'Login')

@section('content')

    <h1>Login</h1>

    <form action="{{ route('login.index.post') }}" method="POST" >
        @csrf
        <div class="form-group">
        <label for="">Usuario</label>
        <input type="text"
            class="form-control" name="usuario" placeholder="Nombre de Usuario">
        </div>

        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password"
                class="form-control" name="pass" placeholder="Ingresa contraseña">
        </div>

        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>

    </form>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>
@endsection