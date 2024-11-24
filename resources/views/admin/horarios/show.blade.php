@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Datos del horario</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Doctores</label><b>*</b>
									<p>
										{{$horario->doctor->nombres." ".$horario->doctor->apellidos." - ".$horario->doctor->especialidad}}
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="especialidad">Consultorios</label><b>*</b>
									<p>
										{{$horario->consultorio->nombre." - ".$horario->consultorio->ubicacion}}
									</p>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombres">Día</label><b>*</b>
									<p>{{$horario->dia}}</p>
                                </div>
                            </div>
							<div class="col-md-4">
                                <div class="form-group">
                                    <label for="hora_inicio">Hora Inicio</label><b>*</b>
									<p>{{$horario->hora_inicio}}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hora_final">Hora Final</label><b>*</b>
									<p>{{$horario->hora_final}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
