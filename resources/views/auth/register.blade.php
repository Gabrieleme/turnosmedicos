@extends('layouts.form')

@section('title')
    <b>Registro de usuario</b>
@endsection
@section('subtitle')
    Registro de usuario
@endsection
@section('content')
    <div class="register-box-body">

    <form action="{{ route('register')}}" method="POST">
      @csrf
      @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Error!</strong>{{ $errors->first() }}
        </div>
     @endif
      <div class="form-group has-feedback">
      <input id="name" type="text" class="form-control" placeholder="Nombre completo" name="name" value="{{ old('name')}}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email')}}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Repetir contraseña" id="password-confirm" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
       </div>
       <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>

      </div>
     </form>

        <a href="{{ route('login') }}" class="text-center">Ya soy usuario</a>
      </div>

    </div>
@endsection
