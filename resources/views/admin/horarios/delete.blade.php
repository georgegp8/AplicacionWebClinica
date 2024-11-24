@extends('layouts.admin')
@section('content')
    <div class="row">
		<h1>Horario del Doctor: {{ $horario->doctor->nombres . ' ' . $horario->doctor->apellidos }} | Consultorio: {{ $horario->consultorio->nombre }}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar este horario?</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/horarios', $horario->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doctor">Doctor</label>
                                    <p>{{ $horario->doctor->nombres . ' ' . $horario->doctor->apellidos }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="consultorio">Consultorio</label>
                                    <p>{{ $horario->consultorio->nombre . ' - ' . $horario->consultorio->ubicacion }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dia">Día</label>
                                    <p>{{ $horario->dia }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hora_inicio">Hora Inicio</label>
                                    <p>{{ $horario->hora_inicio }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hora_final">Hora Fin</label>
                                    <p>{{ $horario->hora_final }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Volver</a>
                                    <button type="submit" class="btn btn-danger">Eliminar horario</button>
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
