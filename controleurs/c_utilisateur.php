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
    case 'pageinscription':
    {
        include("vues/v_inscription.php");
        break;
    }
    case'sinscrire':
    {
        $mail = $_POST["adresse_mail"];
        $mdp = $_POST["mdp"];
        $nom = $_POST["Nom"];
        $prenom = $_POST["Prenom"];
        $rue = $_POST["Rue"];
        $cp = $_POST["CP"];
        $ville = $_POST["Ville"];
        $req = $pdo -> inscription($mail,$mdp,$nom,$prenom,$rue,$cp,$ville);
    }
}