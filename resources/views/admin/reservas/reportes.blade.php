@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Reporte de reservas de citas médicas</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Generar Reporte</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ url('/admin/reservas/pdf') }}" class="btn btn-success">
                        <i class="bi bi-printer"></i> Listado de todas las reservas
                    </a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Generar Reporte por fechas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('admin.reservas.pdf_fechas')}}" method="GET">
						<div class="row">
							<div class="col-md-4">
								<label for="">Fecha inicio: </label>
								<input type="date" name="fecha_inicio" class="form-control">
							</div>
							<div class="col-md-4">
								<label for="">Fecha final: </label>
								<input type="date" name="fecha_fin" class="form-control">
							</div>
							<div class="col-md-4">
								<label for="">Fecha final: </label>
								<button class="btn btn-success"><i class="bi bi-printer"></i> Generar reporte</button>
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