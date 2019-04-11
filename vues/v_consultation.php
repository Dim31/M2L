<html>
<head>
    <?php   

 include("head.html");
?>
</head>


<br/><br/><br/><br/>
<center><h1>Consultation de vos frais : </h1></center><br/><br/><br/>
<h2>Je suis sousigné : 
    <?php
  
     $nom = $identification[0]['NOM'];
          $prenom = $identification[0]['PRENOM'] ;
         echo "$nom $prenom";

    ?>
    </h2>
<center>
<table border=2>

<th>Adresse mail</th><th>Date du frais</th>
<th>Motif</th><th>Trajet</th>
<th>Km</th><th>Cout peage</th>
<th>Cout repas</th><th>Cout hebergement</th>

<?php 

foreach($bordereau as $lebordereau)
{
    $adressemail = $lebordereau['ADRESSE_MAIL'];
   
    $date = $lebordereau['DATE_FRAIS'];
   
    $motif = $lebordereau['ID_MOTIF'];
    $lelibelle = $pdo -> getlelibelle($motif);
    $lemotif = $lelibelle[0]['libelle'];

    $trajet = $lebordereau['TRAJET'];
    $km = $lebordereau['KM'];
    $coutpeage = $lebordereau['COUT_PEAGE'];
    $coutrepas = $lebordereau['COUT_REPAS'];
    $couthebergement = $lebordereau['COUT_HEBERGEMENT'];

    echo "<tr><td>$adressemail</td><td>$date</td><td>$lemotif</td><td>$trajet</td><td>$km</td><td>$coutpeage</td><td>$coutrepas</td><td>$couthebergement</td></tr>";
?>
<br/><br/><br/>
<?php
   
} 
?>
    
    


</table>

</center>