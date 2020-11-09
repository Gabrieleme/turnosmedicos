@extends('layouts.panel')
<!-- este es el contenido central de medicos donde se muestra la tabla -->
@section('content')
    <div class="card">
        <div class="card-header">{{ __('Panel de administración') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Nuevo médico</h3>
                                    <div class="col text-right">
                                        <a href="{{ url('medicos')}}" class="btn btn-sm btn-default">
                                            volver
                                        </a>
                                    </div>
                            </div class="card-body">
                            <div><!--establezco un foreach para iterar en los mensajes en funcion del error-->
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                    <!-- /.box-header -->
                            <div class="box-body">
                            <form action="{{ url('medicos')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre del médico</label>
                                    <input type="text" name="nombre" class="form-control" required value="{{ old('nombre')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email')}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="dni">DNI</label>
                                        <input type="text" name="dni" class="form-control" value="{{ old('dni')}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>
                                        <input type="text" name="direccion" class="form-control" value="{{ old('direccion')}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input type="text" name="telefono" class="form-control" value="{{ old('telefono')}}" >
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>

                                </form>
                            <!-- /.box-body -->
                            </div>
                        <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
        </div>
    </div>
@endsection
