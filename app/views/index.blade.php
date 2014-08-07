@extends('_master')

@section('jumbo')
	<p> This application allows you to create and store a list of ingredients you have on hand. You will then be able to search for recipes based on what you have in stock!</p>
@stop

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
		<div class = "col-md-12">
			<br>
		</div>
	</div>

	@if(Auth::guest())
	<div class = "row">
		<div class = "col-md-12">
			<p> Here is a sample pantry: </p>
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
						@foreach($ingredientList as $ingredient)
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
			</div>
	</div>
	@else
	<div class = "row">
		<div class = "col-md-12">
			<p> There are no ingredients in your pantry! </p>
		</div>
	</div>
	@endif
@stop




