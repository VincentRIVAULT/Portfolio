
<section id="login">
	<h2><i class="fas fa-sign-in-alt"></i> connectez-vous</h2>
	<form method="POST" action="index.php?controller=securite&action=login">
		<ul>
			<li>
				<label for="username" class="required">Username* :</label>
				<input type="text" id="username" name="username" autofocus required/>
				<span class="error">Champ invalide</span>
			</li>
			<li>
				<label for="password" class="required">Password* :</label>
				<input type="password" id="password" name="password" required/>
				<span class="error">Champ invalide</span>
			</li>
			<li>
				<label for=""></label>
				<input type="submit" id="connexion" name="connexion" value="Se connecter"/>
			</li>
			<p><small class="required">* Champ obligatoire</small></p>
		</ul>
	</form>
</section>
