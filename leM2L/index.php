<?php 

require_once("util/class.pdoM2L.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];
/* Cr�ation d'une instance d'acc�s � la base de donn�es */
//$pdo = PdoVanille::getPdoVanille();	 
$pdo = PdoM2L::getPdoM2L();
switch($uc)
{
	case 'accueil':
		{
			include('vues/v_accueil.php');
			break;
		}
	case 'utilisateur' :
		{
			include("controleurs/c_utilisateur.php");
			break;
		}
	case 'demandeur':
		{
			include("controleurs/c_demandeur.php");	
			break;
		}
}