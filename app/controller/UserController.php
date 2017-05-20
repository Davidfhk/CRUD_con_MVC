<?php

namespace David\Crud\Controller;
use David\Crud\View\View;
use David\Crud\Model\User;

class UserController
{
	public function index(){
		$view = new View('app/templates/user');
		echo "Listado de usuarios";
		$user = User::all();
		$view->render('index.php', ['users' => $user]);
	}

	public function show($id){
		$view = new View('app/templates/user');
		$user = User::find($id);
		$view->render('show.php', ['user' => $user]);
	}
}