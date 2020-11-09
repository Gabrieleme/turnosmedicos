@extends('layouts.panel')
<!-- este es el contenido central de especialidad donde se muestra la tabla -->
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
                                <h3 class="box-title">Nueva especialidad</h3>
                                    <div class="col text-right">
                                        <a href="{{ url('especialidad')}}" class="btn btn-sm btn-default">
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
                            <form action="{{ url('especialidad')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre de la especialidad</label>
                                    <input type="text" name="nombre" class="form-control" required value="{{ old('nombre')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion')}}" >
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
