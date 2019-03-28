<?php
/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO
 * pour l'application Vanille
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoVanille qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author slam5
 * @version    1.0

 */

class PdoM2L
{   		
      	private static $monPdo;
        private static $monPdoM2L = null;
        
        private function __construct()
	{
    		PdoM2L::$monPdo = new PDO('mysql:host=127.0.0.1;dbname=fredi', 'root', ''); 
			PdoM2L::$monPdo->query("SET CHARACTER SET utf8");
    }
    
         public function _destruct()
    {
		PdoM2L::$monPdo = null;
    }
    
    public  static function getPdoM2L()
	{
		if(PdoM2L::$monPdoM2L == null)
		{
			PdoM2L::$monPdoM2L= new PdoM2L();
		}
		return PdoM2L::$monPdoM2L;  
	}






    public function seconnecter($lemail, $lemdp)
    {

            $str = "Select password, adresse_mail from demandeurs where adresse_mail = '$lemail';";

            $res= PdoM2L::$monPdo->query($str);

            $ligne = $res->fetch();



        if(($lemdp == $ligne['password'])&&($lemail == $ligne['adresse_mail']))
        {
        //echo "Connexion réussi."; 
        include('vues/v_demandeur.php');
        }
        else 
        {
        echo "Echec, erreur dans vos saisies."; include('vues/v_seconnecter.php');
        }
        
    }

    public function getlebordereau($lemail)
    {
        $reqbord = "Select * from lignes_frais where adresse_mail = '$lemail'";
        $resbord = PdoM2L::$monPdo->query($reqbord);
        $lignebord = $resbord -> fetchAll();

        return $lignebord;

    }


    public function declarer($lemail,$date, $motif,$trajet,$km,$Ctrajet,$peage,$Chebergement)
    {   
      //  $reqS = "Select adresse_mail from lignes_frais where adresse_mail = $lemail";
        
        // $resS = PdoM2L::$monPdo->query($reqS);
        
        //$lesmail = $resS->fetch();
        
       // if($lemail == $lesmail['adresse_mail'])
        
       echo "C_demandeur c bon";
 
        $reqi = "Insert into lignes_frais values('$lemail', '$date','$motif','$trajet','$km','$Ctrajet','$peage','$Chebergement', NULL, NULL, NULL, NULL, NULL);";
       
        $resi = PdoM2L::$monPdo->exec($reqi);
        
       


        include('vues/v_demandeur.php');

    }
    
    public function getlesinfos($lemail)
    {
        $reqinfo = "Select NOM, PRENOM FROM demandeurs where adresse_mail = '$lemail'";
     
        $resinfo = PdoM2L::$monPdo->query($reqinfo);

        
        $lesinfos = $resinfo -> fetchAll();
        
        return $lesinfos;
    }

    public function getlesmails()
    {
        $reqmail = "Select adresse_mail from demandeurs";
        $resmail = PdoM2L::$monPdo->query($reqmail);

        $lesmails = $resmail -> fetchAll();
        
        return $lesmails;
    }
    public function inscription($mail,$mdp,$nom,$prenom,$rue,$cp,$ville){
        $req = "Insert into demandeurs values('$mail','$nom','$prenom','$rue','$cp','$ville','$mdp')";
        $res = PdoM2L::$monPdo->exec($req);
        include('vues/v_accueil.php');
    }

}