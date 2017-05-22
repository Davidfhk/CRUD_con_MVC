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

	// public function show($id){
	// 	$view = new View('app/templates/user');
	// 	$user = User::getUserById($id);
	// 	$view->render('show.php', ['user' => $user]);
	// }

	public function update($id){
		$view = new View('app/templates/user');
		if (empty($_POST)) {
			$user = User::getUserById($id);
			$view->render('update.php', ['user' => $user]);
		}else{
			// var_dump($_POST);
			$user = User::setUser($id,$_POST['name'],$_POST['surname'],$_POST['address']);
			header('Location:../');
		}

	}

	public function addUser(){
		if (isset($_POST)) {
			$user = User::addUser($_POST['name'],$_POST['surname'],$_POST['address']);
		header('Location:../');
		}

	}

	public function deleteUser($id){
		$user = User::deleteUser($id);
		header('Location:../');
	}
}