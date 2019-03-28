<?php

$action = $_REQUEST['action'];
switch($action)
{
  case 'pagedeclarer':
  {
      $lesmail = $pdo->getlesmails();
      include("vues/v_declarer.php");
      break;
  }


  case 'declaration':
  {
    $mail = $_POST['mail'];
    
    $date = $_POST['date'];
    $motif = $_POST['motif'];
    $trajet = $_POST['trajet'];
    $km = $_POST['km'];
    $Ctrajet = $_POST['Ctrajet'];
    $peage = $_POST['peage'];
    $repas = $_POST['Repas'];
    $hebergement = $_POST['hebergement'];

   
    $pdo -> declarer($mail,$date, $motif,$trajet,$km,$Ctrajet,$peage,$hebergement);
    break;
  }


  case 'pageconsultation':
  {
    $mail = $_REQUEST['mail'];
    $bordereau = $pdo -> getlebordereau($mail);
    $identification = $pdo ->getlesinfos($mail);
    include('vues/v_consultation.php');
    break;
  }

  case 'consultation':
  {
    break;
  }

  case 'pagemodifier':
    {
      include('vues/v_modifier.php');
      break;
    }
}