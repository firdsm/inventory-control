@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Outcoming Orders</h1>
	</div>

	<div class="col-sm-4 form-group">
		<a class="btn btn-sm btn-primary" href="/order/create">Add Data</a>
	</div>
</div>

@include('layouts.alert')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Orders Data
			</div>
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Customer Name</th>
							<th>Order Date</th>
							<th class="center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $order)
						<tr class="odd gradeX">

							<td> {{ $order->product->name }} </td>

							<td> {{ $order->quantity }} </td>

							<td> {{ $order->quantity * $order->product->price }} </td>

							<td class="center"> {{ $order->customer->name }} </td>

							<td class="center"> {{ $order->order_date->toFormattedDateString() }} </td>

							<td class="center tooltip-demo">

								<a data-toggle="tooltip" data-placement="left" data-original-title="Edit data"  href="/order/{{ $order->id }}/edit" class="btn btn-primary btn-circle">
									<i class="fa fa-pencil"></i>
                            	</a>

                            	<form style="display: inline-block;" id="delete-form" action="/order/{{ $order->id }}" method="post" >
                            		<button data-toggle="tooltip" data-placement="right" data-original-title="Delete data" class="btn btn-danger btn-circle" type="submit"><i class="fa fa-times"></i></button>

                            		{{ method_field('delete') }}
                            		
                            		{{ csrf_field() }}
                            	</form>

							</td>
						</tr>
						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
	</div>
</div>


@endsection