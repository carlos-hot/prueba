@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR USUARIOS</h2>
<form action="/blog/public/user/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
	<div class="mb-3">
		<label>Nombre Usuario</label>
		<input type="nombre" name="nombre" type="text" class="form-control" value="{{$user->name}}">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="email" name="email" type="text" class="form-control" value="{{$user->email}}">
	</div>
    <a href="/blog/public/user" class="btn btn-secondary" tabindex="5">Cancelar</a>
	<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    
</form>
@endsection