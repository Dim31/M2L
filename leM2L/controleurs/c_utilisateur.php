<?php

$action = $_REQUEST['action'];
switch($action)
{
    case 'seconnecter':
    {
//include("connexionbdd.php");

$mail = $_POST["mail"];
$mdp = $_POST["mdp"];


$test = $pdo -> seconnecter($mail, $mdp);
      break;
    }

    case 'pageconnexion':
    {
        include("vues/v_seconnecter.php");
        break;
    }
}