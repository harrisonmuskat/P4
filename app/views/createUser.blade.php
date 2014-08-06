@extends('_master')

@section('content')
	<div class = "row">
		<div class = "col-md-4 col-md-offset-4">
			<form role = "form" action= "{{ url('newuser') }}" method="post">
				<div class = "form-group">
					<label for="username"> Username: </label>
					<input type="text" class = "form-control" id="username" name="username" placeholder="Username">
				</div>
				<div class = "form-group">
					<label for="email"> Email: </label>
					<input type="email" class = "form-control" id="email" name="email" placeholder="Email">
				</div>
				<div class = "form-group">
					<label for="password"> Password: </label>
					<input type="password" class = "form-control" id="password" name="password" placeholder="password">
				</div>
				<button type="submit" class="btn btn-default"> Submit </button>
			</form>
		</div>
	</div>
@stop