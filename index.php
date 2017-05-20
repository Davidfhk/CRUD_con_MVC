<?php
require 'vendor/autoload.php';
use David\Bootstrap\Request;

$request = new Request();

// obtenemos el parámetro o asignamos un valor por defecto
$controller = $request->getParam('controller') ?? 'page';

// construimos el nombre completo del controlador
$controller = ucfirst($controller) . 'Controller';
$controller = 'David\\Crud\Controller\\'. $controller;

// obtenemos el parámetro o asignamos un valor por defecto
$action = $request->getParam('action') ?? 'index';

// instanciamos el controlador
$controller = new $controller;

// y llamamos a la "accion"/método pasando el id si lo hay
$controller->$action($request->getParam('id'));