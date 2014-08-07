<?php

//PantryController.php

class PantryController extends BaseController
{
	public function index()
	{
		//Display sample pantry
		$ingredientList = Ingredient::all();

		//If no user
		if(Auth::guest())
		{
			$ingredientList = $ingredientList->random(5);

			return View::make('index', compact('ingredientList'));
		}
		
		return View::make('index');
		
	}

	public function createUser()
	{
		//Show the form to create a user
		return View::make('createUser');
	}

	public function handleCreateUser()
	{
		$userData = Input::all();

		$rules = array(
			'username' => 'alpha_num|min:3',
			'email' => 'email|unique:users,email'
		);

		$validator = Validator::make($userData, $rules);

		if($validator->passes())
		{
			$user = new User;
			$user->username = $userData['username'];
			$user->password = Hash::make($userData['password']);
			$user->email = $userData['email'];
			$user->save();

			return Redirect::to('/')->with('register', 'Thank you for registering!');
		}

		return Redirect::to('createUser')->withErrors($validator);
		
	}

	public function loginUser()
	{
		//Show the form to login a user
		return View::make('login');
	}

	public function handleLoginUser()
	{
		$credentials = Input::only('username', 'password');
		if(Auth::attempt($credentials))
		{
			return Redirect::intended('/');
		}
		return Redirect::to('login');
	}

	public function logoutUser()
	{
		Auth::logout();
		return Response::make('You are logged out.');
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
		$ingredient = new Ingredient();
		$ingredient->name = Input::get('item');
		$ingredient->srvName1 = Input::get('servings');
		$ingredient->save();
		return View::make('index');
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