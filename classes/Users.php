<?php
class Users {
    /* Properties */
    private $conn;

    /* Get database access */
    public function __construct(\PDO $pdo) {
        $this->conn = $pdo;
    }

    /* List all users */
    public function getUsers() {
        return $this->conn->query("SELECT * FROM users")->fetchAll();
    }

    public function getRelations($id, $table){

        $sql = "SELECT * FROM ". $table." WHERE id =".$id;    

        return $this->conn->query($sql)->fetchAll();
    }

}