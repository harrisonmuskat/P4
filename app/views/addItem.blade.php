@extends('_master')

@section('content')
@if(Session::has('message'))
	<div class="alert alert-success alert-dismissable" role="alert">
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		{{ Session::get('message') }}
	</div>
@endif
<div class = "row">
	<div class = "col-md-4">
		<form class = "form-horizontal" role = "form" action = "{{ url('additem') }}" method = "post">
			<legend> Search and Add Items to Pantry: </legend>
			<div class = "form-group">
				<label for = "item" class = "col-md-3 control-label"> Item Name: </label>
				<div>
					<input type = "text" class = "form-control" id = "item" name = "item" placeholder = "ex. Lettuce">
				</div>
			</div>
			<div class = "form-group">
				<div class = "col-md-2">
					<input type="submit" id = "search" name = "search" class="btn btn-primary" value = "Search"> </input>
				</div>
			</div>
		</form>
	</div>
</div>
@if(isset($results))
	<table class = "table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Serving</th>
				<th>Serving Size (g)</th>
				<th>Calories</th>
				<th>Carbs (g)</th>
				<th>Fats (g)</th>
				<th>Proteins (g)</th>
				<th>Add to Pantry<th>
			</tr>
		<thead>
		<tbody>
			@foreach($results as $ingredient)
				<tr>
					<td class = "text-primary"> {{ $ingredient->name }} </td>
					<td> {{ $ingredient->srvName1 }} </td>
					<td> {{ $ingredient->srvSize1 }} </td>
					<td> {{ $ingredient->calories }} </td>
					<td> {{ $ingredient->carbohydrates }} </td>
					<td> {{ $ingredient->fats }} </td>
					<td> {{ $ingredient->proteins }} </td>
					<td> <form method = "post" action = "{{ url('additem') }}"> 
							<input type = "hidden" id = "id" name = "id" value = "{{ $ingredient->id }}">
							<input type="submit" id = "add" name = "add" class="btn btn-primary btn-sm" value = "Add!"> </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endif
@stop
