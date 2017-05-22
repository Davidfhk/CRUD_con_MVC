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

	public static function getUserById($id){
		$db = Db::getInstance();
		$id = intval($id);

		$req = $db->prepare('SELECT * FROM datos_usuarios WHERE id = :id');

		$req->execute(array('id' => $id));
		$user = $req->fetch();

		return new User($user['id'],$user['nombre'],$user['apellido'],$user['direccion']);
	}

	public static function setUser($id,$name,$surname,$address){
		$db = Db::getInstance();
		$id = intval($id);
		$req = $db->prepare('UPDATE datos_usuarios 
					SET nombre = :name, apellido = :surname, direccion = :address 
					WHERE id = :id');

		$req->execute(array('id' => $id, 'name' => $name,'surname' => $surname, 'address' => $address));

	}

	public static function addUser($name,$surname,$address,$photo = null){
		$db = Db::getInstance();
		$req = $db->prepare('INSERT INTO datos_usuarios(nombre,apellido,direccion,foto)
					VALUES (:name,:surname,:address,:photo)');

		$req->execute(array('name' => $name,'surname' => $surname, 'address' => $address, 'photo' => $photo));
	}

	public static function deleteUser($id){
		$db = Db::getInstance();
		$id = intval($id);
		$req = $db->prepare('DELETE FROM datos_usuarios WHERE id = :id');

		$req->execute(array('id' => $id));
	}
}