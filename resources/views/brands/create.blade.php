@extends('layouts.master')


@section('content')

	<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Creation Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('brands.store')}}" method="post">

              	@csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><strong>Nom:</strong></label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Entrer nom du Brand...">

                    @if($errors->has('name'))

                      <span class="text-danger">{{ $errors->first('name') }}</span>

                    @endif


                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>




@endsection 