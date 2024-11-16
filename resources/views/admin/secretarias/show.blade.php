@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Secretaria: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
									<p>{{$secretaria->nombres}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
									<p>{{$secretaria->apellidos}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="dni">DNI</label>
									<p>{{$secretaria->dni}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
									<p>{{$secretaria->celular}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
									<p>{{$secretaria->fecha_nacimiento}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
									<p>{{$secretaria->direccion}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
									<p>{{$secretaria->user->email}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
