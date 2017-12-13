@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Add Order Data</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Order Form
			</div>
			<div class="panel-body">
				<form action="/order/{{ $order->id }}" method="post">
					
					{{ method_field('PATCH') }}

					{{ csrf_field() }}

					<div class="form-group has-feedback {{ $errors->has('product_id') ? 'has-error' : '' }}">
						<label>Product Name</label>
						<select class="form-control" type="text" name="product_id">
							<option value="" disabled selected>Select Product</option>
							@foreach($products as $product)
							<option {{ $product->id == $order->product->id ? 'selected' : '' }} value="{{ $product->id }}"> {{ $product->name }} </option>
							@endforeach
						</select>
						@if($errors->has('product_id'))
						<span class="help-block"> {{ $errors->first('product_id') }}</span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('quantity') ? 'has-error' : '' }}">
						<label>Quantity</label>
						<input placeholder="Input quantity" min="1" class="form-control" value="{{ $order->quantity }}" type="number" name="quantity">
						@if($errors->has('quantity'))
						<span class="help-block"> {{ $errors->first('quantity') }}</span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('order_date') ? 'has-error' : '' }}">
						<label>Order Date</label>
						<input value="{{ $order->order_date->format('Y-m-d') }}" class="form-control" type="date" name="order_date">
						@if($errors->has('order_date'))
						<span class="help-block"> {{ $errors->first('order_date') }}</span>
						@endif
					</div>

					<div class="form-group has-feedback {{ $errors->has('customer_id') ? 'has-error' : '' }}">
						<label>Customer Name</label>
						<select class="form-control" type="text" name="customer_id">
							<option value="" disabled selected>Select Customer</option>
							@foreach($customers as $customer)
							<option {{ $customer->id == $order->customer->id ? 'selected' : '' }} value="{{ $customer->id }}"> {{ $customer->name }} </option>
							@endforeach
						</select>
						@if($errors->has('customer_id'))
						<span class="help-block"> {{ $errors->first('customer_id') }}</span>
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