<?php

//Recipe.php

class Recipe extends Eloquent
{
	//public $timestamps = false;

	public function users()
	{
		return $this->belongsToMany('User', 'recipe_user');
	}
}