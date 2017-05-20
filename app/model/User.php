<?php

namespace David\Crud\Model;

use \PDO;
use David\Bootstrap\Database as Db;

class User
{
	private $id;
	private $name;
	private $surname;
	private $address;


	public function __construct($id = null, $name = '', $surname = '', $address = ''){
		$this->id = $id;
		$this->name = $name;
		$this->surname = $surname;
		$this->address = $address;
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public static function all(){
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM datos_usuarios');

		foreach ($req->fetchAll() as $user) {
			$list[] = new User($user['id'],$user['nombre'],$user['apellido'],$user['direccion']);
		}
		return $list;
	}

	public static function find($id){
		$db = Db::getInstance();
		$id = intval($id);

		$req = $db->prepare('SELECT * FROM datos_usuarios WHERE id = :id');

		$req->execute(array('id' => $id));
		$user = $req->fetch();

		return new User($user['id'],$user['nombre'],$user['apellido'],$user['direccion']);
	}
}