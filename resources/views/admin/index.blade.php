@extends('layouts.admin')
@section('content')
	<div class="row">
		<h1>Panel principal</h1>
	</div>
	<hr>
	<div class="row">
    {{--     Tarjeta para contar usuarios --}}
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
    {{--     Tarjeta para contar secretarias --}}
    <div class="col-lg-3 col-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$total_secretarias}}</h3>

          <p>Secretarias</p>
        </div>
        <div class="icon">
          <i class="ion fas bi bi-file-person"></i>
        </div>
        <a href="{{'admin/secretarias'}}" class="small-box-footer">Más información<i class="fas bi bi-file-person"></i></a>
      </div>
  </div>
	</div>
@endsection