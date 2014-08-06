<?php

//PantryController.php

class PantryController extends BaseController
{
	public function index()
	{
		//If no user
		if(Auth::guest())
		{
			//Display sample pantry
			$ingredientList = Ingredient::all();

			$ingredientList = $ingredientList->random(5);

			return View::make('index', compact('ingredientList'));
		}
		else
		{

		}
		
	}

	public function createUser()
	{
		//Show the form to create a user
		return View::make('createUser');
	}

	public function handleCreateUser()
	{
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();

		return Response::make('Welcome to MyPantry,'.Input::get('username'));
	}

	public function searchItem()
	{
		//Show the form to search for a pantry item
		return View::make('searchItem');
	}

	public function handleSearchItem()
	{
		//Process the item search
	}

	public function addItem()
	{
		//Show the form to add an item (or items) to the pantry

		return View::make('addItem');
	}

	public function handleAddItem()
	{

		$item = Input::get('item');
		$item = '\''.$item.'\'';

		return Ingredient::where('name', 'LIKE', 'PIE')->get();
		/*$pantryDB = new mysqli('localhost', 'root', 'root', 'pantry');

		if (mysqli_connect_errno()) 
		{
    		printf("Connect failed: %s\n", mysqli_connect_error());
    		exit();
		}

		else {
			$query = "SELECT * FROM ingredients";
			$query .= "WHERE MATCH (name)";
			$query .= "AGAINST (\'".$item."\' WITH QUERY EXPANSION)";

			if($pantryDB->multi_query($query))
			{
				do 
				{
					if($result = $pantryDB->store_result())
					{
						while ($row = $result->fetch_row())
						{
							printf($row[0]);
						}
						$result->free();
					}
				}
				while($pantryDB->next_result());
			}
			
		}

		$pantryDB->close();*/
		
	}

	public function deleteItem()
	{
		//Show delete page for pantry item
		return View::make('deleteItem');
	}

	public function handleDeleteItem()
	{
		//Process the delete form submission
	}

}