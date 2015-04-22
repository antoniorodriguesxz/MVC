<?php

class Login extends Controller{

	public function index(){
		$this->view('user/login', ['name' => 'António', 'x' => 't0ze']);

	}
}