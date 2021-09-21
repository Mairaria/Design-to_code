<?php
class Team {
    /* Properties */
    private $conn;

    /* Get database access */
    public function __construct(\PDO $pdo) {
        $this->conn = $pdo;
    }

    /* List all users */
    public function getTeams() {
        return $this->conn->query("SELECT * FROM team")->fetchAll();
    }

    public function getRelations($id, $table){

        $sql = "SELECT * FROM ". $table." WHERE id =".$id;    

        return $this->conn->query($sql)->fetchAll();
    }

}



     <?php
                    foreach($teams as $team) {
                ?>

                 <?php

                    $users = $projects_qry->getRelations($project['User_Id'],'teams');
             
                ?>

                   <?php
                   // foreach($teams as $team) {
                ?>
                 // <?=$user['Team_Id']?>/<?=$project["Project_Name"]?>