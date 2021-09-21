<?php
class Activity {
    /* Properties */
    private $conn;

    /* Get database access */
    public function __construct(\PDO $pdo) {
        $this->conn = $pdo;
    }

    /* List all users */
    public function getActivities() {
        return $this->conn->query("SELECT * FROM activity")->fetchAll();
    }

    public function getRelations($id, $table){

        $sql = "SELECT * FROM ". $table." WHERE id =".$id;    

        return $this->conn->query($sql)->fetchAll();
    }

}