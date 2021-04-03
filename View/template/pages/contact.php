	<section id="contact">
		<h2><i class="fas fa-at"></i> contactez-moi <i class="fas fa-paper-plane"></i></h2>
			<!-- <h3>Faisons connaissance</h3> -->
			<section id="formMap" class="flexBetween">
				<form id="form" method="POST" action="index.php?controller=mail&action=submitForm" enctype="multipart/form-data">
					<ul>
						<li>
							<label for="nom" class="required">Nom* :</label>
							<input type="text" id="nom" name="nom" placeholder="Nom" autofocus/>
							<span class="error">Champ invalide</span>
						</li>
						<li>
							<label for="prenom" class="required">Prénom* :</label>
							<input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
							<span class="error">Champ invalide</span>
						</li>
						<li>
							<label for="ville" class="required">Ville* :</label>
							<input type="text" id="ville" name="ville" placeholder="Ville"/>
							<span class="error">Champ invalide</span>
						</li>
						<!-- <li><label for="tel">Tél :</label>
							<input type="tel" id="tel" name="tel" placeholder="0123456789" maxlength="10" />
							<span class="error">Champ invalide</span>
						</li> -->
						<li>
							<label for="email" class="required">E-mail* :</label>
							<input type="email" id="email" name="email" placeholder="xxx@yyy.zz"/>
							<span class="error">Champ invalide</span>
						</li>
						<li>
							<label for="sujet" class="required">Sujet* :</label>
							<input type="text" id="sujet" name="sujet" placeholder="Sujet"/>
							<span class="error">Champ invalide</span>
						</li>
						<li>
							<label for="message" class="required">Message* :</label>
							<textarea id="message" name="message" rows="5" cols="10" placeholder="laissez un message"></textarea>
							<span class="error">Champ invalide</span>
						</li>
						<li><label for="fichier">Joindre un fichier :</label>
							<input type="file" id="fichier" name="fichier" />
						</li>
						<li>
							<label></label>
							<input class="button-primary button" type="reset" value="Effacer" id="erase"/>
							<input class="button-primary button" type="submit" value="Envoyer" id="send" />
						</li>
						<p><small class="required">* Champ obligatoire</small></p>
					</ul>							
				</form>
				<aside id="asideContact">
					<h3>{titre}</h3>
					{contenu}
					<!-- <p>Vincent RIVAULT</p>
					<p>Développeur informatique</p>
					<p>1 square Georges Pompidou 49100 ANGERS</p> -->
					<figure id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.682046699245!2d-0.5449103484959892!3d47.47662507907407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878f01c05e915%3A0x5a687fdc6a1088b2!2s1%20Square%20Georges%20Pompidou%2C%2049100%20Angers%2C%20France!5e0!3m2!1sfr!2snl!4v1589304785426!5m2!1sfr!2snl" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</figure>
				</aside>
			</section>
	</section>
