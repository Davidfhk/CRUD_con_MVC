<?php

namespace David\Crud\Controller;
use David\Crud\View\View;

class PageController
{
	public function index(){
		$view = new View('app/templates/page');
		$view->render('index.php');
	}

	public function about($id){
		echo "Web desarrollada por... David";
	}
}