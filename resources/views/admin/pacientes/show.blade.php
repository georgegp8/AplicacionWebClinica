@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Paciente: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
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
									<p>{{$paciente->nombres}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
									<p>{{$paciente->apellidos}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="dni">DNI</label>
									<p>{{$paciente->dni}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="ruc">RUC</label>
									<p>{{$paciente->ruc}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="fecha_nacimiento">Fecha de nacimiento</label><b>*</b>
									<p>{{$paciente->fecha_nacimiento}}</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="genero">Género</label>
									<p>
										@if ($paciente->genero=='M')
											MASCULINO
										@else
											FEMENINO
										@endif
									</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="celular">Celular</label><b>*</b>
									<p>{{$paciente->celular}}</p>
								</div>
							</div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="correo">Email</label><b>*</b>
									<p>{{$paciente->correo}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                        	<div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección</label><b>*</b>
									<p>{{$paciente->direccion}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="grupo_sanguineo">Grupo sanguíneo</label>
									<p>{{$paciente->grupo_sanguineo}}</p>
								</div>
							</div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="alergias">Alergias</label><b>*</b>
									<p>{{$paciente->alergias}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="contacto_emergencia">Contaco de emergencia</label><b>*</b>
									<p>{{$paciente->contacto_emergencia}}</p>
                                </div>
                            </div>
							<div class="col-md-9">
                                <div class="form-group">
                                    <label for="observaciones">Observaciones</label>
									<p>{{$paciente->observaciones}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Volver</a>
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
