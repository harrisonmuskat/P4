@extends('_master')

@section('content')
	<div>
		<p> This application allows you to create and store a list of ingredients you have on hand. You will then be able to search for recipes based on what you have in stock!</p>
	</div>

	<table class="table">
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
			<tr>
		<thead>
		<tbody>
			@foreach($ingredientList as $ingredient)
			<tr>
				<td> {{ $ingredient->name }} </td>
				<td> {{ $ingredient->srvName1 }} </td>
				<td> {{ $ingredient->srvSize1 }} </td>
				<td> {{ $ingredient->calories }} </td>
				<td> {{ $ingredient->carbohydrates }} </td>
				<td> {{ $ingredient->fats }} </td>
				<td> {{ $ingredient->proteins }} </td>
				<td> <button type="submit" class="btn btn-default"> Add!</button></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop