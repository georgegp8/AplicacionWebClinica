@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Datos de la configuración</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre de la Clínica</label><b>*</b>
                                        <p>{{ $configuracion->nombre }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label><b>*</b>
                                        <p>{{ $configuracion->direccion }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label><b>*</b>
                                        <p>{{ $configuracion->telefono }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="correo">Correo</label><b>*</b>
                                        <p>{{ $configuracion->correo }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Logotipo</label>
                                <center>
                                    <img src="{{ url('storage/' . $configuracion->logo) }}" alt="logo"
                                        style="width: 100px; display: block; margin: auto;">
                                </center>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <a href="{{ url('admin/configuraciones') }}" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
