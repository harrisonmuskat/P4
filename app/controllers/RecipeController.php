<?php

//RecipeController.php

class RecipeController extends BaseController
{
	public function recipeSearch(array $pantry)
	{
		//Returns a list of recipes based on user's pantry items
		return View::make('recipeSearch');
	}

	public function addRecipe($recipe)
	{
		//Show form to favorite a recipe
		return View::make('addRecipe');
	}

	public function handleAddRecipe()
	{
		//Handle add recipe form submission
	}

	public function createRecipe()
	{
		//Allow user to add a custom recipe with their pantry ingredients
	}

	public function deleteRecipe($recipe)
	{
		//Allow user to un-favorite a recipe
		return View::make('deleteRecipe');
	}

	public function handleDeleteRecipe()
	{
		//Handle the recipe deletion
	}

}