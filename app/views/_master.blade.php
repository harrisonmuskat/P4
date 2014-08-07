<!doctype html>
<html lang = "en">

<head>
	<meta charset="utf-8">
	<title>MyPantry</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>

<body>
	<div class = "container">
		<nav class = "navbar navbar-default" role = "navigation">
			<div class = "navbar-header">
				<a href="{{ action('PantryController@index') }}" class = "navbar-brand">MyPantry</a>
				<a href="{{ action('PantryController@createUser') }}" class = "btn btn-primary navbar-btn"> Register </a>
				<a href="{{ action('PantryController@loginUser') }}" class = "btn btn-primary navbar-btn"> Log In </a>
				<a href="{{ action('PantryController@logoutUser') }}" class = "btn btn-primary navbar-btn"> Log Out </a>
				<a href="{{ action('PantryController@addItem') }}" class = "btn btn-default navbar-btn"> Add an Item to Your Pantry </a>
				<a href="{{ action('RecipeController@yourRecipe') }}" class = "btn btn-default navbar-btn"> Your Recipes </a>
			</div>
		</nav>
		@yield('content')
	</div>

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type = "text/javascript"></script>
	<script src = "js/bootstrap.min.js"></script>
</body>

</html>