<html>
	<head>
	</head>
	<body>
		<div class="connection">			
		<form class="col-sm-12" method="post" action="index.php?uc=identification&action=seConnecter">
         <div class="row justify-content-md-center">
            <div id="login_card" class="card text-white bg-dark col-sm-8 col-md-4">
               <div class="card-header text-center">M2L</div>

               <div class="form-group">
                  <label for="mail"> E-mail : </label>
                  <input type="text" class="form-control" placeholder="E-mail" name="mail" id="mail" required>
               </div>

               <div class="form-group">
                  <label for="password_user"> Mot de passe : </label>
                  <input type="password" class="form-control" placeholder="Mot de passe" name="password_user" id="password_user" required>
               </div>

			   <button class="btn btn-info btn-block" type="submit">Se connecter</button>
			</div>
      	</form>
		</div>									
	</body>
</html>
