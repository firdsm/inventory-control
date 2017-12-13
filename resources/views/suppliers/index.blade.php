@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Suppliers Management</h1>
	</div>	

	<div class="col-sm-4 form-group">
		<a class="btn btn-sm btn-primary" href="/supplier/create">Add Data</a>
	</div>
</div>

@include('layouts.alert')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Suppliers Data
			</div>
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>No</th>
							<th>Supplier Name</th>
							<th>Address</th>
							<th>E-mail</th>
							<th class="center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($suppliers as $supplier)
						<tr class="odd gradeX">

							<td> {{ $supplier->id }} </td>

							<td> {{ $supplier->name }} </td>

							<td> {{ $supplier->address }} </td>

							<td> {{ $supplier->email }} </td>

							<td class="center tooltip-demo">

								<a data-toggle="tooltip" data-placement="left" data-original-title="Edit data"  href="/supplier/{{ $supplier->id }}/edit" class="btn btn-primary btn-circle">
									<i class="fa fa-pencil"></i>
                            	</a>

                            	<form style="display: inline-block;" id="delete-form" action="/supplier/{{ $supplier->id }}" method="post" >
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