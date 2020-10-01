<?php
require('Config/configRequirements.php');

#Connection infos
$host = HOST;
$dbname = DBNAME;
$user = USERNAME;
$password = PASSWORD;

#Connection to the BDD
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($pdo)){
    $notificationConnexion = new SqlConnection();
    $notificationConnexion->getSqlConnected();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    $errorMessage = new ErrorsMessage($errorMessage);
    $errorMessage = $errorMessage->getError();
    $displayMessage = new DisplayError($errorMessage);
    $displayMessage->getErrorDisplay();
    die(1);
}

?>