<?php 
	//print_r($_GET);
	//echo $_GET['mot'];
	$mot = filter_var($_GET['mot'],FILTER_SANITIZE_STRING);
	//echo $mot;
		
	include "basededonnees.php";
	
	// "SELECT * FROM film WHERE titre LIKE '%futur%' OR resume LIKE '%futur%'"
	$SQL_RECHERCHE_RAPIDE = "SELECT * FROM voiture WHERE marque LIKE '%$mot%' OR presentation LIKE '%$mot%'";
	//echo $SQL_RECHERCHE_RAPIDE;
	
	$requeteRechercheRapide = $basededonnees->prepare($SQL_RECHERCHE_RAPIDE);
	$requeteRechercheRapide->execute();
	$resultats = $requeteRechercheRapide->fetchAll();
	//print_r($resultats);
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Luxcars</title>
	<style>

	</style>
</head>
<body>
	<header>
		<h1>Luxcars</h1>
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
					<h4 class="marque">
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