@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Add Purchase Data</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Purchase Form
			</div>
			<div class="panel-body">
				<form action="/purchase" method="post">

					{{ csrf_field() }}

					<div class="form-group has-feedback {{ $errors->has('product_id') ? 'has-error' : '' }}">
						<label>Product Name</label>
						<select class="form-control" type="text" name="product_id">
							<option value="" disabled selected>Select Product</option>
							@foreach($products as $product)
							<option {{ $product->id == old('product_id') ? 'selected' : '' }} value="{{ $product->id }}"> {{ $product->name }} </option>
							@endforeach
						</select>
						@if($errors->has('product_id'))
						<span class="help-block"> {{ $errors->first('product_id') }}</span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('quantity') ? 'has-error' : '' }}">
						<label>Quantity</label>
						<input placeholder="Input quantity" min="1" class="form-control" value="{{ old('quantity') }}" type="number" name="quantity">
						@if($errors->has('quantity'))
						<span class="help-block"> {{ $errors->first('quantity') }}</span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('purchase_date') ? 'has-error' : '' }}">
						<label>Purchase Date</label>
						<input value="{{ date('Y-m-d') }}" class="form-control" type="date" name="purchase_date">
						@if($errors->has('purchase_date'))
						<span class="help-block"> {{ $errors->first('purchase_date') }}</span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('supplier_id') ? 'has-error' : '' }}">
						<label>Supplier Name</label>
						<select class="form-control" type="text" name="supplier_id">
							<option value="" disabled selected>Select Supplier</option>
							@foreach($suppliers as $supplier)
							<option {{ $supplier->id == old('supplier_id') ? 'selected' : '' }} value="{{ $supplier->id }}"> {{ $supplier->name }} </option>
							@endforeach
						</select>
						@if($errors->has('supplier_id'))
						<span class="help-block"> {{ $errors->first('supplier_id') }}</span>
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