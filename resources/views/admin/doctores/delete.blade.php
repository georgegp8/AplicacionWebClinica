@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Doctor: {{$doctor->nombres." ".$doctor->apellidos}} </h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar este registro?</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
					<form action="{{ url('admin/doctores',$doctor->id)}}" method="POST">
                        @csrf
						@method('DELETE')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
									<p>{{$doctor->nombres}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
									<p>{{$doctor->apellidos}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
									<p>{{$doctor->telefono}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="licencia_medica">Licencia médica</label>
									<p>{{$doctor->licencia_medica}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="especialidad">Especialidad</label>
									<p>{{$doctor->especialidad}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
									<p>{{$doctor->user->email}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/doctores') }}" class="btn btn-secondary">Cancelar</a>
									<button type="submit" class="btn btn-danger">Eliminar registro</button>
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