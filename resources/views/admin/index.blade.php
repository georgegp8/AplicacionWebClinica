@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1><b>Bienvenido: </b>{{ Auth::user()->email }} / <b>Rol: </b>{{ Auth::user()->roles->pluck('name')->first() }}
        </h1>
    </div>
    <hr>
    <div class="row">

        @can('admin.usuarios.index')
            {{-- Restringir acceso --}}
            {{--     Tarjeta para contar usuarios --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $total_usuarios }}</h3>

                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-file-person"></i>
                    </div>
                    <a href="{{ 'admin/usuarios' }}" class="small-box-footer">Más información<i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.secretarias.index')
            {{-- Restringir acceso --}}
            {{--     Tarjeta para contar secretarias --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $total_secretarias }}</h3>

                        <p>Secretarias</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-person-circle"></i>
                    </div>
                    <a href="{{ 'admin/secretarias' }}" class="small-box-footer">Más información<i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.pacientes.index')
            {{-- Restringir acceso --}}
            {{--     Tarjeta para contar pacientes --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $total_pacientes }}</h3>

                        <p>Pacientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-person-fill-check"></i>
                    </div>
                    <a href="{{ 'admin/pacientes' }}" class="small-box-footer">Más información<i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.consultorios.index')
            {{-- Restringir acceso --}}
            {{--     Tarjeta para contar consultorios --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $total_consultorios }}</h3>

                        <p>Consultorios</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-building-fill-add"></i>
                    </div>
                    <a href="{{ 'admin/consultorios' }}" class="small-box-footer">Más información<i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.doctores.index')
            {{-- Restringir acceso --}}
            {{--     Tarjeta para contar doctores --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $total_doctores }}</h3>

                        <p>Doctores</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-person-lines-fill"></i>
                    </div>
                    <a href="{{ 'admin/doctores' }}" class="small-box-footer">Más información<i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan

        @can('admin.horarios.index')
            {{-- Restringir acceso --}}
            {{--     Tarjeta para contar horarios --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ $total_horarios }}</h3>

                        <p>Horarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion fas bi bi-calendar2-week"></i>
                    </div>
                    <a href="{{ 'admin/horarios' }}" class="small-box-footer">Más información<i
                            class="fas bi bi-file-person"></i></a>
                </div>
            </div>
        @endcan
    </div>

    @can('cargar_datos_consultorio')
        {{-- Restringir acceso --}}
        {{--     Calendario de atención de clientes --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="card-title">Calendario de atención de doctores</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <label for="especialidad" class="mt-2">Consultorios</label>
                            </div>
                            <div class="col-md-4">
                                <select name="consultorio_id" id="consultorio_select" class="form-control">
                                    <option value="">Seleccione un consultorio...</option>
                                    @foreach ($consultorios as $consultorio)
                                        <option value="{{ $consultorio->id }}">
                                            {{ $consultorio->nombre . ' - ' . $consultorio->ubicacion }}
                                        </option>
                                    @endforeach

                                    {{-- Script para cargar la tabla dinámicamente --}}
                                    <script>
                                        $('#consultorio_select').on('change', function() {
                                            var consultorio_id = $('#consultorio_select').val();

                                            if (consultorio_id) {
                                                $.ajax({
                                                    url: "{{ url('/consultorios/') }}" + '/' + consultorio_id,
                                                    type: 'GET',
                                                    success: function(data) {
                                                        $('#consultorio_info').html(data);
                                                    },
                                                    error: function() {
                                                        alert('Error al obtener los datos del consultorio');
                                                    }
                                                });
                                            } else {
                                                $('#consultorio_info').html('');
                                            }
                                        });
                                    </script>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{-- Contenedor para la tabla --}}
                        <div class="table-responsive w-full">
                            {{-- Carga dinámica de la tabla del consultorio --}}
                            <div id="consultorio_info">
                                <!-- Aquí se cargará la tabla del consultorio -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--     Calendario de reserva de citas médicas --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-warning">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="card-title">Calendario de reserva de citas médicas</h3>
                            </div>
                            <div class="col-md-4">
                                <div style="float: right">
                                    <label for="">Doctores</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select name="doctor_id" id="doctor_select" class="form-control">
                                    <option value="">Seleccione un doctor...</option>
                                    @foreach ($doctores as $doctore)
                                        <option value="{{ $doctore->id }}">
                                            {{ $doctore->nombres . ' ' . $doctore->apellidos . ' - ' . $doctore->especialidad }}
                                        </option>
                                    @endforeach
                                </select>

                                {{-- Script para cargar la tabla dinámicamente - doctores --}}
                                <script>
                                    $('#doctor_select').on('change', function() {
                                        var doctor_id = $('#doctor_select').val();
                                        //alert(doctor_id);

                                        var calendarEl = document.getElementById('calendar');
                                        var calendar = new FullCalendar.Calendar(calendarEl, {
                                            initialView: 'dayGridMonth',
                                            locale: 'es',
                                            events: [],
                                        });

                                        if (doctor_id) {
                                            $.ajax({
                                                url: "{{ url('/cargar_reserva_doctores/') }}" + '/' + doctor_id,
                                                type: 'GET',
                                                dataType: 'json',
                                                success: function(data) {
                                                    calendar.addEventSource(data);
                                                },
                                                error: function() {
                                                    alert('Error al obtener los datos del doctor');
                                                }
                                            });
                                        } else {
                                            $('#doctor_info').html('');
                                        }

                                        calendar.render();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal">
                                Registrar cita médica
                            </button>

                            <a href="{{ url('/admin/ver_reservas', Auth::user()->id) }}" class="btn btn-success"><i
                                    class="bi bi-calendar2-check"></i> Ver las reservas</a>

                            <!-- Modal -->
                            <form action="{{ url('/admin/eventos/create') }}" method="post">
                                @csrf
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Reserva de cita médica</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Doctor</label>
                                                            <select name="doctor_id" id="" class="form-control">
                                                                @foreach ($doctores as $doctore)
                                                                    <option value="{{ $doctore->id }}">
                                                                        {{ $doctore->nombres . ' ' . $doctore->apellidos . ' - ' . $doctore->especialidad }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Fecha de reserva</label>
                                                            <input type="date" name="fecha_reserva"
                                                                value="<?php echo date('Y-m-d'); ?>" id="fecha_reserva"
                                                                class="form-control">
                                                            <script>
                                                                document.addEventListener('DOMContentLoaded', function() {
                                                                    const fechaReservaInput = document.getElementById('fecha_reserva');

                                                                    // Escuchar el evento de cambio en el campo de fecha de reserva
                                                                    fechaReservaInput.addEventListener('change',
                                                                        function() {

                                                                            let selectedDate = this.value; // Obtener la fecha seleccionada

                                                                            // Obtener la fecha actual en formato Iso (yyyy-mm-dd) 
                                                                            let today = new Date().toISOString().slice(0, 10);

                                                                            // Verificar si la fecha seleccionada es anterior a la fecha actual 
                                                                            if (selectedDate < today) {
                                                                                // si es así, establecer la fecha seleccionada en null 
                                                                                this.value = null;
                                                                                alert('No se puede reservar en una fecha pasada.');
                                                                            }
                                                                        });
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Hora de reserva</label>
                                                            <input type="time" name="hora_reserva" id="hora_reserva"
                                                                class="form-control">
                                                            @error('hora_reserva')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror

                                                            @if ($message = Session::get('hora_reserva'))
                                                                <script>
                                                                    document.addEventListener('DOMContentLoaded', function() {
                                                                        $('#exampleModal').modal('show');
                                                                    });
                                                                </script>
                                                                <small style="color:red">{{ $message }}</small>
                                                            @endif

                                                            <script>
                                                                document.addEventListener('DOMContentLoaded', function() {
                                                                    const horaReservaInput = document.getElementById("hora_reserva");

                                                                    horaReservaInput.addEventListener('change', function() {
                                                                        let selectedTime = this.value; // Obtener el valor de la hora seleccionada

                                                                        // Asegurar que solo se capture la parte de la hora
                                                                        if (selectedTime) {
                                                                            selectedTime = selectedTime.split(':'); // Dividir la cadena en horas y minutos
                                                                            selectedTime = selectedTime[0] + ':00'; // Conservar solo la hora, ignorar los minutos
                                                                            this.value = selectedTime; // Establecer la hora modificada en el campo de entrada
                                                                        }

                                                                        // Verificar si la hora seleccionada está fuera del rango permitido
                                                                        if (selectedTime < '08:00' || selectedTime > '20:00') {
                                                                            // Si es así, establecer la hora seleccionada en null
                                                                            this.value = null;
                                                                            alert('Por favor, seleccione una hora entre las 08:00 y las 20:00.');
                                                                        }
                                                                    });
                                                                });
                                                            </script>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    @endcan




@endsection
