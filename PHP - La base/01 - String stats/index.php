<!--							LE PHP:
 	Le php est le morceaux de code qui fait de la gestion de la page web en back end
	le  tout ce fait au niveaux du serveur aulieux de le faire dans le navigateur donc
	tout ce qui ce trouve dans des balise php est lus avant meme que on vois la page web  
-->

<!-- but fair afficher un erreur si le mot rechercher est <= 2 fair 2 variables : $showError $showSuccess-->
 <?php
	$showError = strlen($_GET["searchBox"] ?? "") <= 2;
	$showSuccess = strlen($_GET["searchBox"] ?? "") >= 3;
 ?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div id="analyze-icon">
				<!-- ici afficher si on a reussi ou pas avec les variables : $showError $showSuccess-->
				<?php
					if($showError){
				?>
					<div style="padding:3px;border:1px solid black">
						Mauvaise recherche. Veuillez entre un mot de 3 caractères minimum
					</div>
				<?php
					}

					if($showSuccess){
				?>
					<div style="padding:3px;border:1px solid black">
						Bravo! Vous avez entré un mot de 3 caractères et plus.
					</div>
				<?php
					}
				?>
				
			</div>
			<div id="analyze-result">
				Entrez une chaîne de caractères et appuyez sur analyser
			</div>
			<!-- retirer la div pour mettre un forme pour pouvoir transmettre le text du search box -->
			<!-- <div id="search-line">
				<div>
					<input type="text" name="searchBox" placeholder="Texte à analyser" />
				</div>
				<div class="btn">
					<button>Analyser</button>
				</div>
			</div> -->
			<form action="index.php" method="get">
				<div id="search-line">
					<input type="text" name="searchBox" placeholder="text a analyser">
				</div>
				<div class="btn">
					<button>Analyser</button>
				</div>
			</form>
		</div>
	</body>
</html>