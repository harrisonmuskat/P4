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

			if(!$ingredientList->isEmpty())
			{
				$ingredientList = $ingredientList->random(5);

				return View::make('index', compact('ingredientList'));
			}
			else
			{
				return View::make('index');
			}
			
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

		return View::make('index');
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