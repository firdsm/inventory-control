@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Edit Customer Data</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Customer Form
			</div>
			<div class="panel-body">
				<form action="/customer/{{ $customer->id }}" method="post">
					{{ method_field('PATCH')}}
					{{ csrf_field() }}
					<div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
						<label>Name</label>
						<input value="{{ $customer->name }}" class="form-control" type="text" name="name">
						@if($errors->has('name'))
						<span class="help-block">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
						<label>Address</label>
						<input value="{{ $customer->address }}" class="form-control" type="text" name="address">
						@if($errors->has('address'))
						<span class="help-block">{{ $errors->first('address') }}</span>
						@endif
					</div>
					<div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
						<label>E-mail</label>
						<input value="{{ $customer->email }}" class="form-control" type="email" name="email">
						@if($errors->has('email'))
						<span class="help-block">{{ $errors->first('email') }}</span>
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