	<header class="site-header">
		<nav id="haut" class="flexBetween">
			<ul class="flexStart">
				<li>
					<a id="acc" href="index.php" title="Accueil"><h1>{vincentRivault}</h1></a>
				</li>
			</ul>
			<ul class="flexEnd">
				{optionConnect}
			</ul>	
		</nav>
	</header>
		
	<nav class="navMenu site-header">
		<div class="flexBetween">
			<ul id="menuPrincipal" class="flexBetween">
				{optionNotAuth}
			</ul>
		</div>
		<ul id="menuAdmin" class="flexCenter">
			{optionAuth}	
		</ul>
	</nav>

	<div>
		<a id="retour" class="invisible" href="#haut"></a>
	</div>

    <div id="container">

		<main class="site-content">
			<!-- <form role='search' id="search" class='bd-search d-flex align-items-center'>
				<span class='algolia-autocomplete spanSearch'>
					<input type='search' class='form-control ds-input' id='search-input' placeholder='Chercher...' aria-label='Search for...' autocomplete='off' data-docs-version='4.4' spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto'>
				</span>
			</form> -->
