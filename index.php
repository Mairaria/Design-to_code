<!DOCTYPE html>
<html lang="en">
<?php

include 'connect.php';
include 'classes/Project.php';
include 'classes/Activity.php';
include 'classes/Helper.php';
include 'classes/Users.php';
//include 'classes/Team.php';
$projects_qry = new Project($pdo);
$projects = $projects_qry->getProjects();

$activity_sqry = new Activity($pdo);
$activities = $activity_sqry->getActivities();

$users_qry = new Users($pdo);
$users = $users_qry->getUsers();

//$teams_sqry = new Team($pdo);
//$teams = $teams_sqry->getTeams();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DESIGN-TO-CODE.css">
    <title>Design to code</title>
</head>

<body>

    <header method="post" Action="connection.php" class="brand-header">
        <!--logo-->
        <div class="logo">
            <img src="https://tailwindui.com/img/logos/v1/workflow-mark-on-brand.svg" width="40" height="30" alt="Workflow logo" />
        </div>
        <!-- Search section -->
        <div class="search ">
             
            <!--<img src="https://img.icons8.com/material-rounded/24/ffffff/search.png" />-->
            <input id="search" class=" placeholder" placeholder="Search projects" type="search" rel="search"/>
        </div>
        <div class="end">
            <div class="text">
                <div class="text-one">Documentation
                </div>
                <div class="text-two">Support
                </div>
            </div>
            <!-- Profile -->
            <div class="prof">
                <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" width="30" height="30" alt="" />
            </div>
        </div>
    </header>
    <section class="row">
        <article class="story quarter">
     

            <!-- <h1 class="article-title"></h1>-->
            <div class="details">
                <!-- Profile -->
                <div class="profile">
                    <img class="photo" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" width="70 " height="70 " alt=" " />
                    <div class="name ">
                        <div class="name-1 "><?=$users[1]['User_Name']?></div>
                        <span>
                <div class="screen-button ">
                    <button @click="projectCreateOpen = true" type="button" class="screen-button ">
                        New Project
                      </button>
                      <div>
                    <button class="screen-button ">Invite team</button>
                      

            
                </div>
                <!--badge-->
                <div class="badge ">
                    <div class="badge1">

                        <span class="pro"><?=$users[0]['Package_Id']?></span>
                    </div>
                    <div class="badge2">
                        <!--collection -->
                        <svg xmlns="http://www.w3.org/2000/svg " width="20 " height="20 " viewBox="0 0 20 20 " fill="currentColor ">
    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z " />
  </svg>
                        <span class="pro"><?=count($projects)?> Projects</span>
                    </div>
                </div>
            </div>
        </article>
        <article class="story half ">
            <!-- Projects List -->
            <div class="overview ">
                <div class="projects ">
                    <h2 class="hed ">Projects</h2>
                    <span>
                    <button id="sort-menu " type="button " class="buttons ">
                      <!--sort-ascending -->
                      <svg  class="corn" xmlns="http://www.w3.org/2000/svg " width="30 " height="20 ">
                        <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z " /> 
                      </svg>
                      <div class="sm">Sort</div>
                      <!--down -->
                      <svg  class="corn" xmlns="http://www.w3.org/2000/svg " width="30 " height="20 ">
                        <path fill-rule="evenodd " d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z " clip-rule="evenodd " />
                      </svg>
                    </button>
                  </span>
                </div>

                <?php
                    foreach($projects as $project) {
                ?>

                <li class="Workcation ">
                    <div class="flex items-center justify-between space-x-4 ">
                        <div class="min- ">
                            <div class="rightside">
                                <span class="block ">
                                <h3 class="hedi "><span aria-label="Running" class="green">
                                    <div class="lightgreen"></div>
                                </span>
                                <!--<span class="green" ><div class="lightgreen" ></div></span>-->
                                <div class="fey"><?=$project["Project_Name"]?></div>
                                </h3>
                            </div>
                            <div class="git">

                  </svg>
                <?php

                    $users = $projects_qry->getRelations($project['User_Id'],'users');
             
                ?>

                   <?php
                    foreach($users as $user) {
                ?>
                  <?=$user['User_Name']?>/<?=$project["Project_Name"]?>

                                <?php

                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--meta info -->
                    <div class="meta ">
                        <p class="site ">
                            <span> Visit site
                     <span style="font-size:150%;color:#f4ca11; ">&starf; </span>
                            </span>
                        </p>

                <?php


                    $technologies = $projects_qry->getRelations($project['Technology_Id'],'technology');
                    $countries = $projects_qry->getRelations($project['country_id'],'country');
                    $datetime = Helper::time_elapsed_string($project['created_at'], false);


             
                ?>
                        <p class="notes ">
                     
                                               <?php
                    foreach($technologies as $technology) {
                ?>
                       <span> <?=$technology['Technology_Name']?></span>


                                       <?php

                    }
                    ?>
                            <span>&#xB7;</span>
                 
                            <span> <?=$datetime?></span>

                            <span>&#xB7;</span>
                <?php
                    foreach($countries as $country) {
                ?>
                       <span> <?=$country['name']?></span>

                    <?php

                     }
                    ?>
                        </p>
                    </div>
                </li>
                     <?php

                    }
                    ?>

        </article>
        <article class="story-quarter ">
            <!-- Activity feed -->
            <div class="act">
                <h4 class="activity-feed ">Activity</h4>
            </div>

            <div>
                <ul class="aci ">


                <?php
                    foreach($activities as $activity) {
                    $activity_datetime = Helper::time_elapsed_string($activity['created_at'], true);
                ?>
                    <li class="activity-item ">
                        <div class="combine ">
                            <div class="together ">
                                <h3 class="t-name "><img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80 " width="30 " height="30 " alt=" " />
                                    <div class="omg">You</div>
                                </h3>
                                <p class="time "><?=$activity_datetime;?></p>
                            </div>
                            <p class="statement "><?=$activity['details'];?></p>
                        </div>
                    </li>

                <?php
                   }
                ?>
                </ul>
            </div>
        </article>
    </section>
</body>

</html>