@extends('layouts.panel')
<!-- este es el contenido central del menu principal -->
@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('te has logeado!') }}
    </div>
@endsection
