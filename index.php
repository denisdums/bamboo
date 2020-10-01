<?php

include ('App/AppRequirements.php');
ob_start();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Define your meta infos -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Define the title of your app -->
    <title>A Bamboo Application</title>

    <!-- Put here your links -->
    <link href="App/assets/css/style.css" rel="stylesheet">


</head>

<body>
            <?php
            #Redirections_Maker
                if (isset($_GET['action'])){
                    $action = new Action($_GET['action']);
                    $action->getAction();
                }
                else{
                    include ('App/views/home.php');
                }
                ob_end_flush();
            ?>
</body>
</html>
