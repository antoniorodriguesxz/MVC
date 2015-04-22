<?php

class Home extends Controller{

	public function index($name = ''){

		$user = $this->model('User');
		$user->name = "Hello i'm b1";
		$user->x = User::all();

		$this->view('home/index', ['name' => $user->name, 'x' => $user->x]);

		
	}

	public function create($username = '', $email = ''){
		
		User::create([
				'username' => $username,
				'email' => $email
			]);
	}
}