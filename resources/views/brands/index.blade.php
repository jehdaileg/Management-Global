@extends('layouts.master')


@section('content')

		<!-- form start -->
<div class="col">

	
		<example-component></example-component>
	
	<!-- general form elements -->
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Liste des Brands</h3><br>

			<a href="{{ route('brands.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>



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

				@if($brands)

				@foreach($brands as $brand)

				<tr>
					<td>{{ $brand->id }}</td>
					<td>{{ $brand->name }}</td>

					<td>

						<a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Editer</a>

						<a href="" class="btn btn-danger sa-delete" data-form-id="delete-brand-{{ $brand->id }}"><i class="fa fa-trash-alt"></i> Supprimer</a>

						<form id="delete-brand-{{ $brand->id }}" action="{{ route('brands.destroy', $brand->id) }}" method="post">

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

</div>




@stop