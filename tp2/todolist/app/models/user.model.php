<?php

class UserModel {
    public $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=empresa_automoviles;charset=utf8', 'root', '');
    }

    public function getByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}