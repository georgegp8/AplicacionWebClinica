@extends('layouts.admin')
@section('content')
	<div class="row">
		<h1>Listado de usuarios</h1>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-10">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Primary Outline</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				<table class="table table-striped table-bordered table-hover table-sm">
					<thead style="background-color: #36ac3f; color:#ffffff">
					  <tr>
						<td style="text-align: center"><b>Nro</b></td>
						<td style="text-align: center"><b>Nombre</b></td>
						<td style="text-align: center"><b>Email</b></td>
						<td style="text-align: center"><b>Acciones</b></td>
					  </tr>
					</thead>
					<tbody>
					<?php $contador = 1; ?>
					@foreach ($usuarios as $usuario)
						<tr>
							<td style="text-align: center">{{$contador++}}</td>
							<td>{{$usuario->name}}</td>
							<td>{{$usuario->email}}</td>
							<td>
								ver / editar /borrar 
							</td>
						</tr>
					@endforeach	
					</tbody>
				</table>
              </div>
            </div>
          </div>
	</div>
@endsection

