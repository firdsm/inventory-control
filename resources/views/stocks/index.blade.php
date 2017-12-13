@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Current Stock</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Stock Data
			</div>
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Units In Stock</th>
							<th>Units On Orders</th>
							<th>Units Received</th>
							<th>Minimum Required</th>
							<th>Price</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr style="{{ ($product->units_in_stock <= $product->minimum_required) ? 'background-color: #f4433636' : '' }}" >
							<td> {{ $product->name }} </td>
							<td class="center"> {{ $product->units_in_stock }} </td>
							<td class="center"> {{ $product->units_on_order }} </td>
							<td class="center"> {{ $product->units_received }} </td>
							<td class="center"> {{ $product->minimum_required }} </td>
							<td class="center"> {{ $product->price }} </td>
							<td class="center">{{ ($product->units_in_stock <= $product->minimum_required) ? 'Need Reorder' : 'Available' }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
	</div>
</div>


@endsection