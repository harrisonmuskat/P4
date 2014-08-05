<?php

//PantryController.php

class PantryController extends BaseController
{
	public function index()
	{
		//If a user is logged in, show his/her pantry

		//For all others, show listing of possible pantry items and recipes
		$ingredientList = Ingredient::all();

		$ingredientList = $ingredientList->random(5);

		return View::make('index', compact('ingredientList'));
	}

	public function addItem()
	{
		//Show the form to add an item (or items) to the pantry
		return View::make('addItem');
	}

	public function handleAddItem()
	{
		//Process the add form submission
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