@extends('layouts.plantillabase')


@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection


@section('contenido')

<div class="row">
	<div class="col-md-3">
	<a href="user/create" class="btn btn-primary">Agregar</a>		
	</div>
</div><br>
  	<table id="user" class="table table-striped table-bordered shadow-mt-4">
  		<thead class="bg-primary text-white">
  			<tr>
  				<th>Nombre</th>
  				<th>Email</th>
  				<th>Acciones</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach($users as $user)
  				<tr>
                    <td>{{ $user ->name }}</td>
  				    <td>{{ $user ->email }}</td>
  				<td>
				
				<form action="{{route('user.destroy',$user->id)}}" method="POST">
					@csrf
    				@method('DELETE')
					<a href="user/{{ $user->id }}/edit" class="btn btn-info">Editar</a>
  					<button type='submit' class="btn btn-danger">Eliminar</button>
				</form>
  				</td>  
                </tr>
  			@endforeach
  		</tbody>
  	</table>
	  @section('js')
	  	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

		<script type="text/javascript">
				$(document).ready(function() {
    			$('#user').DataTable();
		} );
</script>

	  @endsection
@endsection