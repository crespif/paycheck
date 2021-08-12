<?php


class UserModel{
    private $database;

    function __construct() {
        //conecto a la base de datos
        $this->database = $this->connect();
    }

    /** abro la coneccion */
    private function connect() {
        $database = new PDO('mysql:host=localhost;'.'dbname=paycheck;charset=utf8', 'root', 'Celta411*');  
        //$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $database;
    }

    public function getUser($legajo, $dni, $pass){
        $query = $this->database->prepare('SELECT * FROM usuario WHERE legajo = ? and du = ? and pass = ?');
        $query->execute([$legajo, $dni, $pass]);
        $person = $query->fetch(PDO::FETCH_OBJ);
        return $person;
    }
}