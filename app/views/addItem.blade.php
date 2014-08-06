@extends('_master')

@section('content')
<div class = "row">
	<div class = "col-md-4 col-md-offset-4">
		<form role = "form" action = "{{ url('additem') }}" method = "post">
			<div class = "form-group">
				<label for = "item"> Search: </label>
				<input type = "text" class = "form-control" id = "item" name = "item" placeholder = "ex. Lettuce">
			<div>
			<button type="submit" class="btn btn-default"> Submit </button>
		</form>
	</div>
</div>
@stop
