<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getAuthUsername()
	{
		return $this->username;
	}

	public function ingredients()
	{
		return $this->belongsToMany('Ingredient', 'ingredient_user', 'user_id', 'ingredient_id');
	}

	public function recipes()
	{
		return $this->belongsToMany('Recipe', 'recipe_user');
	}

	public function isAdmin()
	{
		return $this->username->name === 'admin';
	}

}
