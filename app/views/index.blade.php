@extends('_master')

@section('content')
	@if(Session::has('register'))
			<div class="alert alert-success alert-dismissable" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>{{ Session::get('register') }}
			</div>
	@endif
	<div>
		<p> This application allows you to create and store a list of ingredients you have on hand. You will then be able to search for recipes based on what you have in stock!</p>
	</div>

@stop




