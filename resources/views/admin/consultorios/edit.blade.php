@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Actualización del consultorio: {{$consultorio->nombre}}</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/consultorios',$consultorio->id)}}" method="POST">
                        @csrf
						@method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre">Nombre del consultorio</label><b>*</b>
                                    <input type="text" value="{{$consultorio->nombre}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="ubicacion">Ubicación</label><b>*</b>
                                    <input type="text" value="{{$consultorio->ubicacion}}" name="ubicacion" class="form-control" required>
                                    @error('ubicacion')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="capacidad">Capacidad</label><b>*</b>
                                    <input type="number" value="{{$consultorio->capacidad}}" name="capacidad" class="form-control" required>
                                    @error('capacidad')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="number" value="{{$consultorio->telefono}}" name="telefono" class="form-control">
									@error('telefono')
										<small style="color:red">{{ $message }}</small>
									@enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="especialidad">Especialidad</label><b>*</b>
									<input type="text" value="{{$consultorio->especialidad}}"name="especialidad" class="form-control" required>
									@error('especialidad')
										<small style="color:red">{{ $message }}</small>
									@enderror
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="estado">Estado</label>
									<select name="estado" class="form-control">
										@if ($consultorio->estado=='ACTIVO')
										<option value="ACTIVO">ACTIVO</option>
										<option value="INACTIVO">INACTIVO</option>
										@else
										<option value="INACTIVO">INACTIVO</option>
										<option value="ACTIVO">ACTIVO</option>
										@endif

									</select>
								</div>
							</div>							
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar consultorio</button>
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
