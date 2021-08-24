<?php

include_once 'connection.php';
try
{
    $database = new Connection();
    $db = $database->openConnection();
    // inserting data into create table using prepare statement to prevent from sql injections
    $stm = $db->prepare("INSERT INTO roles (id,role_name) VALUES ( :id, :name"));
    // inserting a record
    $stm->execute(array(':id' => 0 , ':name' => 'Member');
    echo "New record created successfully";
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>