@extends('layouts.master')

@section('content')


<div class="col">
	<!-- general form elements -->
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Liste des Categories</h3><br>

			<a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

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

				@if($categories)

				@foreach($categories as $category)

				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>

					<td>

						<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success"><span class="fa fa-edit"></span>Editer</a> &nbsp;

						<a href="" class="btn btn-danger sa-delete" data-form-id="category-delete-{{ $category->id }}"><span class="fa fa-trash-alt"></span>Supprimer</a>
						

						<form action="{{ route('categories.destroy', $category->id) }}" id="category-delete-{{ $category->id }}" method="post"> 

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