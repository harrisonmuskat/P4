<!doctype html>
<html lang = "en">

<head>
	<meta charset="utf-8">
	<title>MyPantry</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
</head>

<body>
	<div class = "container-fluid">
		<div class = "navbar navbar-default navbar-static-top head-border" role = "navigation">
			<div class = "container">
				<a href="{{ action('PantryController@index') }}" class = "navbar-brand" id="brand">MyPantry</a>
				<button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				<div class = "collapse navbar-collapse navheaderCollapse">
					<ul class = "nav navbar-nav navbar-left">
						<li><a href="{{ action('PantryController@createUser') }}">Register</a></li>
						<li><a href="{{ action('PantryController@loginUser') }}">Log In</a></li>
					</ul>
					<ul class = "nav navbar-nav navbar-right">
						<li><a href="{{ action('PantryController@addItem') }}">Add an Item to Your Pantry</a></li>
						<li><a href="{{ action('RecipeController@yourRecipe') }}">Your Recipes</a></li>
						<li><a href="{{ action('PantryController@logoutUser') }}">Log Out</a></li>
					</ul>	
				</div>
			</div>
		</div>
		<div class = "jumbotron">
			<h1> MyPantry </h1>
			@yield('jumbo')
		</div>
		@yield('content')
	</div>

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type = "text/javascript"></script>
	<script src = "js/bootstrap.min.js"></script>
</body>

</html>