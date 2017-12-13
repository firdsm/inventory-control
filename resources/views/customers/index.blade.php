@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Customers Management</h1>
	</div>

	<div class="col-sm-4 form-group">
		<a class="btn btn-sm btn-primary" href="/customer/create">Add Data</a>
	</div>
</div>

@include('layouts.alert')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Customers Data
			</div>
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>No</th>
							<th>Customer Name</th>
							<th>Address</th>
							<th>E-mail</th>
							<th class="center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($customers as $customer)
						<tr class="odd gradeX">

							<td> {{ $customer->id }} </td>

							<td> {{ $customer->name }} </td>

							<td> {{ $customer->address }} </td>

							<td> {{ $customer->email }} </td>

							<td class="center tooltip-demo">

								<a data-toggle="tooltip" data-placement="left" data-original-title="Edit data"  href="/customer/{{ $customer->id }}/edit" class="btn btn-primary btn-circle">
									<i class="fa fa-pencil"></i>
                            	</a>

                            	<form style="display: inline-block;" id="delete-form" action="/customer/{{ $customer->id }}" method="post" >
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