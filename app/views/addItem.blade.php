@extends('_master')

@section('content')
<div class = "row">
	<div class = "col-md-4 col-md-offset-4">
		<form class = "form-horizontal" role = "form" action = "{{ url('additem') }}" method = "post">
			<legend> Search and Add Items to Pantry: </legend>
			<div class = "form-group">
				<label for = "item" class = "col-md-3 control-label"> Item Name: </label>
				<div>
					<input type = "text" class = "form-control" id = "item" name = "item" placeholder = "ex. Lettuce">
				</div>
			</div>
			<div class = "form-group">
				<div class = "col-md-3">
					<button type="submit" class="btn btn-primary"> Submit </button>
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
					<td> <button type="submit" class="btn btn-primary btn-sm"> Add!</button></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endif
@stop
