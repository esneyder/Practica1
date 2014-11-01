<?php
required_once 'Conexion.php';
class Persona{
	private $con;
	private $nom;
    private $apell;
    private $user;
    private $pass;

    public function getNom(){
    	retunr $this->nom;
    }
    public function getApell(){
    	retunr $this->apell;
    }
    public function getUser(){
    	retunr $this->user;
    }
    public function getPass(){
    	retunr $this->pass;
    }
    
    public function setNom($nombre){
    	$this->nom=$nombre;
    }
    public function setApell($apellido){
    	$this->apell=$apellido;
    }
    public function setUser($usuario){
    	$this->user=$usuario;
    }
    public function setPass($password){
    	$this->pass$password;
    }




}

?>