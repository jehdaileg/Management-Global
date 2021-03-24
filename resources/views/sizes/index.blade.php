@extends('layouts.master')


@section('content')

<div class="col">
	<!-- general form elements -->
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Liste des Sizes</h3><br>

			<a href="{{ route('sizes.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

		</div>

		<!-- /.card-header -->
		<!-- form start -->
		<table class="table table-bordered datatable">



			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>

				@if($sizes)

				@foreach($sizes as $size)

				<tr>
					<td>{{ $size->id }}</td>
					<td>{{ $size->name }}</td>

					<td>

						<a href="{{ route('sizes.edit', $size->id) }}" class="btn btn-success"><span class="fa fa-edit"></span>Editer</a> &nbsp;

						<a href="" class="btn btn-danger sa-delete" data-form-id="size-delete-{{$size->id}}"><i class="fa fa-trash-alt"></i> Supprimer</a>

						<form action="{{ route('sizes.destroy', $size->id) }}" method="post" id="size-delete-{{$size->id}}" >
							
							@csrf

							@method('DELETE')

						</form>

						
					</td>
				</tr>

				@endforeach

				@endif

			</tbody>
		</table>
		<!-- /.card -->

		
	</div>





@endsection 