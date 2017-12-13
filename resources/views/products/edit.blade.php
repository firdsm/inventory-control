@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Add Product Data</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Product Form
			</div>
			<div class="panel-body">
				<form action="/product/{{ $product->id }}" method="post">
					{{ method_field('PATCH') }}
					{{ csrf_field() }}

					<div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
						<label>Name</label>
						<input value="{{ $product->name }}" class="form-control" type="text" name="name">
						@if($errors->has('name'))
						<span class="help-block"> {{ $errors->first('name') }} </span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('units_in_stock') ? 'has-error' : '' }}">
						<label>Unit In Stock</label>
						<input value="{{ $product->units_in_stock }}" class="form-control" type="number" name="units_in_stock">
						@if($errors->has('units_in_stock'))
						<span class="help-block"> {{ $errors->first('units_in_stock') }} </span>
						@endif
					</div>		

					<div class="form-group has-feedback {{ $errors->has('minimum_required') ? 'has-error' : '' }}">
						<label>Minimum Required</label>
						<input value="{{ $product->minimum_required }}" class="form-control" type="number" name="minimum_required">
						@if($errors->has('minimum_required'))
						<span class="help-block"> {{ $errors->first('minimum_required') }} </span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('price') ? 'has-error' : '' }}">
						<label>Price</label>
						<input value="{{ $product->price }}" class="form-control" type="number" name="price">
						@if($errors->has('price'))
						<span class="help-block"> {{ $errors->first('price') }} </span>
						@endif
					</div>

					<div class="form-group">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection