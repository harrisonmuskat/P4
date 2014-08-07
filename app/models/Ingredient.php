<?php

//Ingredient.php

class Ingredient extends Eloquent
{
	public $timestamps = false;

	public function users()
	{
		return $this->belongsToMany('User', 'ingredient_user', 'ingredient_id', 'user_id');
	}
}