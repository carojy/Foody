<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
	<form action="submit_login.php" method="POST">
    	<!-- si message d'erreur on l'affiche -->
    	<?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
        	<div class="alert alert-danger" role="alert">
            	<?php echo $_SESSION['LOGIN_ERROR_MESSAGE'];
				unset($_SESSION['LOGIN_ERROR_MESSAGE']) ; ?>
        	</div>
    	<?php endif; ?>
    	<div class="mb-3">
        	<label for="email" class="form-label">Email</label>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        	<div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    	</div>
    	<div class="mb-3">
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="password" class="form-control" id="password" name="password">
    	</div>
    	<button type="submit" class="btn btn-primary">Envoyer</button>
	</form>
	<!-- Si utilisateur bien connecté on affiche un message de succès -->
<?php else : ?>
	<div class="alert alert-success" role="alert">
    	Hello Foodie ! <?php echo $_SESSION['LOGGED_USER']['email']; ?> Bienvenue sur ce site !
	</div>
<?php endif; ?>