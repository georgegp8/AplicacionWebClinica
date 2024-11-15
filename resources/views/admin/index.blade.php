@extends('layouts.admin')
@section('content')
	<div class="row">
		<h1>Panel principal</h1>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_usuarios}}</h3>

                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion fas bi bi-file-person"></i>
              </div>
              <a href="{{'admin/usuarios'}}" class="small-box-footer">Más información<i class="fas bi bi-file-person"></i></a>
            </div>
          </div>
	</div>
@endsection