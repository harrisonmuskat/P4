@extends('_master')

@section('content')
	<div class = "page-header">
		<h1> Your Pantry! <h1>
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
			</tr>
			@endforeach
		</tbody>
	</table>
@stop



