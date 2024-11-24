@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Modificar el horario: {{$horario->dia.", ".$horario->hora_inicio." - ".$horario->hora_final}}</h1>	
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-md-3">
                        <form action="{{ url('admin/horarios', $horario->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
									<div class="form-group">
										<label for="consultorio_id">Consultorios</label><b>*</b>
										<select name="consultorio_id" id="consultorio_select" class="form-control" disabled>
											@foreach ($consultorios as $consultorio)
												<option value="{{ $consultorio->id }}" 
													{{ $consultorio->id == $horario->consultorio_id ? 'selected' : '' }}>
													{{ $consultorio->nombre . " - " . $consultorio->ubicacion }}
												</option>
											@endforeach
										</select>
										<!-- Campo oculto para enviar el consultorio al servidor -->
										<input type="hidden" name="consultorio_id" value="{{ $horario->consultorio_id }}">
									</div>									
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="doctor_id">Doctor</label><b>*</b>
                                        <select name="doctor_id" id="doctor_select" class="form-control" disabled>
                                            @foreach ($doctores as $doctor)
                                                <option value="{{ $doctor->id }}" 
                                                    {{ $doctor->id == $horario->doctor_id ? 'selected' : '' }}>
                                                    {{ $doctor->nombres . " " . $doctor->apellidos . " - " . $doctor->especialidad }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!-- Campo oculto para enviar el doctor al servidor -->
                                        <input type="hidden" name="doctor_id" value="{{ $horario->doctor_id }}">
										
										{{-- Cargar el horario según el consultorio --}}
										<script>
											$(document).ready(function() {
												// Cargar los horarios automáticamente al abrir la página
												var consultorio_id = "{{ $horario->consultorio_id }}"; // Obtener el ID del consultorio asociado
										
												if (consultorio_id) {
													cargarHorarios(consultorio_id);
												}
										
												// Reutilizar la función para cargar horarios dinámicamente
												function cargarHorarios(consultorio_id) {
													var url = "{{ route('admin.horarios.cargar_datos_consultorio', ':id') }}";
													url = url.replace(':id', consultorio_id);
										
													$.ajax({
														url: url,
														type: 'GET',
														success: function(data) {
															$('#consultorio_info').html(data); // Mostrar los horarios
														},
														error: function() {
															$('#consultorio_info').html('<p>Error al cargar los datos del consultorio.</p>');
														}
													});
												}
										
												// Mantén el listener para cambios en el dropdown, en caso se reutilice en otros escenarios
												$('#consultorio_select').on('change', function() {
													var consultorio_id = $(this).val();
													cargarHorarios(consultorio_id);
												});
											});
										</script>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="dia">Día</label><b>*</b>
                                        <select name="dia" id="dia_select" class="form-control" required>
                                            @foreach (['LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO', 'DOMINGO'] as $dia)
                                                <option value="{{ $dia }}" {{ $horario->dia == $dia ? 'selected' : '' }}>
                                                    {{ $dia }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="hora_inicio">Hora Inicio</label><b>*</b>
										<input type="time" name="hora_inicio" value="{{ old('hora_inicio', $horario->hora_inicio) }}" class="form-control" required>
										@error('hora_inicio')
                                        	<small style="color:red">{{ $message }}</small>
                                    	@enderror
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="hora_final">Hora Final</label><b>*</b>
										<input type="time" name="hora_final" value="{{ old('hora_final', $horario->hora_final) }}" class="form-control" required>
										@error('hora_final')
											<small style="color:red">{{ $message }}</small>
										@enderror
									</div>
								</div>								
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-success">Actualizar horario</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        {{-- Aquí se imprimirá la información del consultorio --}}
                        <div id="consultorio_info">
                            {{-- Carga inicial del horario del consultorio --}}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
