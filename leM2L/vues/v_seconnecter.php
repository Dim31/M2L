

<?php
	
	include("v_menu.php")
	?>

		<!-- #fh5co-header -->

		<section id="fh5co-hero" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro no-js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-center-position">
							<h2 class="animate-box">Connectez-vous en tant que demandeur :</h2>
						
						
						
						
						
							<form action="index.php?uc=utilisateur&action=seconnecter" method="POST">
							<strong>
							Ton adresse mail : 
							<input type="text" name="mail" required>
							<br/><br/>
							Ton mot de passe : 
							<input type="text" name="mdp" required>
							<br/><br/></strong>
							<input type="submit" value="Connexion" name="connexion">
							</form>
							
							
							
							
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

