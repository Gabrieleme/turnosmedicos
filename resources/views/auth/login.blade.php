@extends('layouts.form')

@section('title')
    <b>Inicio de sesión</b>
@endsection
@section('subtitle')
    Inicio de sesión
@endsection
@section('content')
    <div class="login-box-body">
        <!--"" -->

        <form method="POST" action="{{ route('login') }}">
            @csrf
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong>{{ $errors->first() }}
                    </div>
                @endif

            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input ID="password"type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>

            <div class="row">
                <div class="col-xs-8">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>
            </div>
            </div>
            <div class="col-xs-5">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div>


        </form>


     <a href="{{ route('password.request') }}">olvide mi password</a><br>
     <a href="{{ route('register') }}" class="text-center">Registrarse</a>

    </div>

@endsection
