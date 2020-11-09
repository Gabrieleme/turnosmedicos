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
                                <h3 class="box-title">Médicos</h3>
                                <div class="col text-right">
                                    <a href="{{ url('medicos/create')}}" class="btn btn-sm btn-success">
                                        Nuevo médico
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (session('notification'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('notification')}}
                                    </div>
                                @endif
                            </div>
                    <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>email</th>
                                            <th>DNI</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($medicos as $medico)
                                            <tr>
                                                <td>{{$medico->nombre}}</td>
                                                <td>{{$medico->email}}</td>
                                                <td>{{$medico->dni}}</td>
                                                <td>

                                                    <form action="{{ url('medicos/'.$medico->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ url('medicos/'.$medico->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--
                                    <tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                        </tr>
                                    </tfoot>
                                    -->
                                </table>
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
