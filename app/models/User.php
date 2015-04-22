<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{

	public $name;
	public $x;

	protected $fillable = ['username', 'email'];
}