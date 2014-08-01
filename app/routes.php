<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use Paste\Pre;

// This is the route for the landing page and for the guest landing page.
Route::get('/', array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

//This is the landing page for logged-in users.
Route::get('/{username}', function($username)
{
	return "Landing page for {$username}.";
});


//This is the pantry page for {$username}.
Route::get('/{username}/pantry', function($username)
{
	return "This is the {$username}s pantry.";
});

//This is how a user adds items to his/her pantry.
Route::post('/{username}/pantry', function($username)
{
	return "This is where {$username} adds items to the pantry.";
});

//This is the recipe page for {$username}.
Route::get('/{username}/recipes', function($username)
{
	return "This is the {$username}s recipe database.";
});

//This is how a user adds a recipe to the database.
Route::post('/{username}/recipes', function($username)
{
	return "This is where {$username} adds recipes to the database.";
});

//This is the recipe search page.
Route::get('/recipes', function()
{
	return "This is the recipe search page.";
});

Route::get('/test/csv', function()
{
    ini_set('auto_detect_line_endings', true);

    $ing_array = array();

    $header = NULL;

    if(($ingredients_file = fopen('data/ingredients.csv', 'r')) !== FALSE)
    {
        while(($row = fgetcsv($ingredients_file)) !== FALSE)
        {
            foreach($row as $field)
            {
                $field = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $field);
            }

            if($header)
            {
                $ing_array[] = array_combine($header, $row); 
            }
            else
            {
                $header = $row;
            }
        }

        fclose($ingredients_file);
    }

    print_r($ing_array);



});

//Database test
/*
Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    return Pre::render($results);

});
*/


