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
/*
-----------------------
Viewable pages
-----------------------
*/
// This is the route for the landing page and for the guest landing page.
Route::get('/', 'PantryController@index');

//This is the route for the user creation page
Route::get('/newuser', 'PantryController@createUser');

//This is the route for the login page
Route::get('/login', 'PantryController@loginUser');

//This is the route to logout
Route::get('/logout', 'PantryController@logoutUser');

//This is the recipe page for users.
Route::get('/recipes', array('before' => 'auth', 'uses' => 'RecipeController@yourRecipe'));

Route::get('/searchitem', 'PantryController@searchItem');

//This is how a user adds items to his/her pantry.
Route::get('/additem', 'PantryController@addItem');

//This is how a user adds a recipe to the database.
Route::get('/addrecipe', 'RecipeController@addRecipe');

//This is the page for deleting pantry items
Route::get('/deleteitem', 'PantryController@deleteItem');

//This is the page for deleting recipes
Route::get('/deleteRecipe', 'RecipeController@deleteRecipe');

/*
-----------------------
Handle Submissions
-----------------------
*/
Route::post('/', 'PantryController@handleAddItem');
Route::post('/newuser', 'PantryController@handleCreateUser');
Route::post('/login', 'PantryController@handleLoginUser');
Route::post('/searchitem', 'PantryController@handleSearchItem');
Route::post('/additem', 'PantryController@handleAddItem');
Route::post('/addrecipe', 'RecipeController@handleAddRecipe');
Route::post('/deleteitem', 'PantryController@handleDeleteItem');
Route::post('/deleterecipe', 'RecipeController@handleDeleteRecipe');

/*
-----------------------
Test route for database seed to ensure proper headers
-----------------------
*/
/*
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
*/


//Database test
/*
Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    return Pre::render($results);

});
*/


