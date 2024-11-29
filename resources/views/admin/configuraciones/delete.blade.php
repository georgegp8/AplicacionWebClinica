@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Eliminar configuración</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar este registro?</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
					<form action="{{ url('admin/configuraciones',$configuracion->id)}}" method="POST">
                        @csrf
						@method('DELETE')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre">Nombre de la Clínica</label><b>*</b>
                                            <input type="text" value="{{$configuracion->nombre}}" name="nombre"
                                                class="form-control" disabled>
                                            @error('nombre')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label><b>*</b>
                                            <input type="address" value="{{$configuracion->direccion}}" name="direccion"
                                                class="form-control" disabled>
                                            @error('direccion')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefono">Teléfono</label><b>*</b>
                                            <input type="number" value="{{$configuracion->telefono}}" name="telefono"
                                                class="form-control" disabled>
                                            @error('telefono')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="correo">Correo</label><b>*</b>
                                            <input type="email" value="{{$configuracion->correo}}" name="correo"
                                                class="form-control" disabled>
                                            @error('correo')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Logotipo</label>
                                    <br>
                                    <center>
										<output id="list">
											<img src="{{ url('storage/'.$configuracion->logo) }}" alt="logo" style="width: 100px; display: block; margin: auto;">
										</output>
									</center>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group">
                            <a href="{{ url('admin/configuraciones') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
