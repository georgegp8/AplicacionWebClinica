@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Consultorio: {{$consultorio->nombre}} </h1>
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
					<form action="{{ url('admin/consultorios',$consultorio->id)}}" method="POST">
                        @csrf
						@method('DELETE')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre">Nombre del consultorio</label>
									<p>{{$consultorio->nombre}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="ubicacion">Ubicación</label>
									<p>{{$consultorio->ubicacion}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="capacidad">Capacidad</label>
									<p>{{$consultorio->capacidad}}</p>
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
									<p>{{$consultorio->telefono}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="especialidad">Especialidad</label>
									<p>{{$consultorio->especialidad}}</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="estado">Estado</label>
									<p>{{$consultorio->estado}}</p>
								</div>
							</div>							
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/consultorios')}}" class="btn btn-secondary">Volver</a>
									<button type="submit" class="btn btn-danger">Eliminar consultorio</button>
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
