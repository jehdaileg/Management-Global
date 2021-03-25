@extends('layouts.master')

@section('content')


<div class="col">
	<!-- general form elements -->
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Liste des Produits</h3><br>

			<a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

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

				@if($products)

				@foreach($products as $product)

				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->name }}</td>

					<td>

						<a href="{{ route('products.edit', $product->id) }}" class="btn btn-success"><span class="fa fa-edit"></span>Editer</a> &nbsp;

						<a href="" class="btn btn-danger sa-delete" data-form-id="product-delete-{{ $product->id }}"><span class="fa fa-trash-alt"></span>Supprimer</a>
						

						<form action="{{ route('products.destroy', $product->id) }}" id="product-delete-{{ $product->id }}" method="post"> 

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