
<?php

include 'database.php';
include 'classes/project.php';
$user = new Project($pdo);
$list = $user->getProjects();

foreach($list as $test) {
    echo $test["Project_Name"],"\n";
}