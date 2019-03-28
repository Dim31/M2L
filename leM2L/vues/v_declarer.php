<html>
<head>
<?php
include("head.html");
$mail = $_REQUEST['mail'];
?>
</head>
<body>

					<h1 id="fh5co-logo"><a href="index.php">M2L<span>.</span></a></h1>
					<ul class="pull-right right-menu">
						<li class="fh5co-cta-btn"><a href="index.php?uc=demandeur&mail=<?=$mail?>&action=pageconsultation">Consultation des frais</a></li>
						<li class="fh5co-cta-btn"><a href="index.php?uc=demandeur&mail=<?=$mail?>&action=pagemodifier">Modifier le compte</a></li>
					</ul>
				
		
        <section id="fh5co-hero" class="js-fullheight" data-next="yes">
			
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-left-position">
                            <h2 class="animate-box">Note de frais des bénévoles</h2>
                            <form name="formDeclarer" method="post" action="index.php?uc=demandeur&mail=<?=$mail?>&action=declaration">  
                                <div class="row">
                                   
                                        
                                </div>
                                <div class="row">
                                <div class="col-25">
                                    <label for="adresse">Mail</label>
                                </div> 
<div class="col-75">   
	
	<select name="mail">
		<?php 
		foreach($lesmail as $unmail)
		{
			$unmail = $unmail['adresse_mail'];
  echo "<option value=$unmail>$unmail</option>";

		}
		?>
</select>

</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="date">Date</label>
    </div> 
<div class="col-75">   
    <input type="date" id="date" name="date" >
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="motif">Motif</label>
    </div> 
<div class="col-75">   
    <input type="text" id="motif" name="motif" placeholder="Exemple : 1">
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="trajet">Trajet</label>
    </div> 
<div class="col-75">   
    <input type="text" id="trajet" name="trajet" placeholder="Exemple : Toulouse-Bordeaux">
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="km">Km parcourus</label>
    </div> 
<div class="col-75">   
    <input type="text" id="km" name="km" placeholder="Exemple : 300Km">
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="Ctrajet">Coût trajet</label>
    </div> 
<div class="col-75">   
    <input type="text" id="Ctrajet" name="Ctrajet" placeholder="Exemple : 60€">
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="peage">Péages</label>
    </div> 
<div class="col-75">   
    <input type="text" id="peage" name="peage" placeholder="Exemple : 24€">
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="Repas">Repas</label>
    </div> 
<div class="col-75">   
    <input type="text" id="Repas" name="Repas" placeholder="Exemple : 100€">
</div>
</div>
<div class="row">
    <div class="col-25">
        <label for="hebergement">Hebergement</label>
    </div> 
<div class="col-75">   
    <input type="text" id="hebergement" name="hebergement" placeholder="Exemple : 120€">
</div>
</div>
<input type='submit'>
					</div>
				</div>
			</div>
			
		</section>
		


</body>
</html>