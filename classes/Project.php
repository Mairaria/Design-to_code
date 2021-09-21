<?php
class Project {
    /* Properties */
    private $conn;

    /* Get database access */
    public function __construct(\PDO $pdo) {
        $this->conn = $pdo;
    }

    /* List all users */
    public function getProjects() {
        return $this->conn->query("SELECT * FROM projects")->fetchAll();
    }

    public function getRelations($id, $table){

        $sql = "SELECT * FROM ". $table." WHERE id =".$id;    

        return $this->conn->query($sql)->fetchAll();
    }
}
