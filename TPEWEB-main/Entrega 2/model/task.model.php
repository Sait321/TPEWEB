<?php

class TaskModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=empresa_automoviles;charset=utf8', 'root', '');
    }

    /**
     * Obtiene y devuelve de la base de datos todas las tareas.
     */
    function getTasks() {
        $query = $this->db->prepare('SELECT * FROM marca');
        $query->execute();

        // $tasks es un arreglo de tareas
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }

    /**
     * Inserta la tarea en la base de datos
     */
    function insertTask($empresa, $nombre, $origen) {
        $query = $this->db->prepare('INSERT INTO marca (empresa, nombre, origen) VALUES(?,?,?)');
        $query->execute([$empresa, $nombre, $origen]);

        return $this->db->lastInsertId();
    }

    
function deleteTask($id) {
    $query = $this->db->prepare('DELETE FROM marca WHERE id = ?');
    $query->execute([$id]);
}

function updateTask($id) {    
    $query = $this->db->prepare('UPDATE marca SET finalizada = 1 WHERE id = ?');
    $query->execute([$id]);
}
}