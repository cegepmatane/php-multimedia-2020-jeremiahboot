<?php 
	//print_r($_GET);
	$marqueRecherche = filter_var($_GET['recherche-marque'],FILTER_SANITIZE_STRING);
	$contenuRecherche = filter_var($_GET['recherche-contenu'],FILTER_SANITIZE_STRING);
	$moteurRecherche = filter_var($_GET['recherche-moteur'],FILTER_SANITIZE_STRING);
	
	if(!empty($marqueRecherche) || !empty($contenuRecherche) || !empty($moteurRecherche))
	{
		$SQL_RECHERCHE_AVANCEE = "SELECT * FROM voiture WHERE 1 = 1 ";
		
		if(!empty($marqueRecherche)) // si l'utilisateur a rempli le champ titre
			$SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND LOWER(marque) like LOWER('%$marqueRecherche%')";
		if(!empty($contenuRecherche)) // si l'utilisateur a rempli le champ contenu
			$SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND LOWER (presentation) like LOWER ('%$contenuRecherche%') or LOWER (description) like LOWER ('%$contenuRecherche%')";
		if(!empty($moteurRecherche))  // si l'utilisateur a rempli le champ realisateur
			$SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND LOWER (moteur) like LOWER ('%$moteurRecherche%')";
		
		echo $SQL_RECHERCHE_AVANCEE;
			
		include "basededonnees.php";
		
		$requeteRecherche = $basededonnees->prepare($SQL_RECHERCHE_AVANCEE);
		$requeteRecherche->execute();
		$resultats = $requeteRecherche->fetchAll();
		//print_r($resultats);
	}
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Cinéma du monde</title>
	<style>

	</style>
</head>
<body>
	<header>
		<h1>Cinéma du monde</h1>
		<nav>
		
		
		</nav>
	</header>
	
	<section id="contenu">
		<header><h2>Résultats de recherche</h2></header>
		
		<div id="resultats-recherche">
		
		<?php 
		
			foreach($resultats as $resultat)
			{
				//print_r($resultat);
				$marque = $resultat['marque'];
				$presentation = $resultat['presentation'];
				$id = $resultat['id'];
				//echo $titre;
				
				?>
				<div class="resultat-recherche">
					<h4 class="titre">
						<a href="voiture.php?voiture=<?=$id?>">
							<?php echo $marque;?>
						</a>
					</h4>
					<div class="presentation">
						<?=$presentation?>
					</div>
				</div>
				<?php 
				
			}
		
		?>
		
		</div>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>