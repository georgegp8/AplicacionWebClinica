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

    <div class="row">
        <div class="col-md-10">
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
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{-- Contenedor para la tabla --}}
                    <div class="table-responsive overflow-auto">
                        {{-- Carga dinámica de la tabla del consultorio --}}
                        <div id="consultorio_info">
                            <!-- Aquí se cargará la tabla del consultorio -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                <label for="especialidad">Consultorios</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select name="consultorio_id" id="consultorio_select" class="form-control">
                                <option value="">Seleccione un consultorio...</option>
                                @foreach ($consultorios as $consultorio)
                                    <option value="{{ $consultorio->id }}">
                                        {{ $consultorio->nombre . ' - ' . $consultorio->ubicacion }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'es',
                events: [{
                    title: '08:00-09:00 Rinoplastía',
                    start: '2024-11-01',
                    end: '2024-11-01',
                    color: '#E82216',
                }, {
                    title: '08:00-09:00 Liposucción',
                    start: '2024-11-05',
                    end: '2024-11-05',
                    color: '#E82216',
                }]
            });
            calendar.render();
        });
    </script>

    {{-- Script para cargar la tabla dinámicamente --}}
    <script>
        $('#consultorio_select').on('change', function() {
            var consultorio_id = $(this).val();

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
@endsection
