<?php

	include "basededonnees.php";
	$MESSAGE_SQL_LISTE_VOITURES = "SELECT id, marque, illustration, presentation from voiture";
	$requeteListeVoitures = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURES);
	$requeteListeVoitures->execute();
	$listeVoitures = $requeteListeVoitures->fetchAll();

?>


<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>LuxCars</title>
	<link rel="alternate" type="application/rss+xml" href="https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/rss.php" />
	<link rel="stylesheet" href="style/style.css">  
	
</head>

<body>
	
<header>
	<h1><a href="liste-voiture.php" class="logo">LuxCars</a></h1>
	<nav>
		<h2><a href="liste-voiture.php" class="acceuil">Acceuil</a></h2>
	</nav>
</header>

<main>
	<div class="box">
	<?php 
		
		
		
		foreach($listeVoitures as $voiture)
		{
			if(empty($voiture['illustration'])) $voiture['illustration'] = 'mouton.png';
			?>
		


			<div class="voitures">
				<a href="voiture.php?voiture=<?php echo $voiture['id']; ?>">
					<h4 class="marque">
						<?php echo $voiture['marque']; ?>					
					</h4>
					<div class="illustration"><img src="illustration/mini/<?php echo$voiture['illustration']?>" alt="voiture"></div>
					<p class="presentation"><?php echo $voiture['presentation']; ?></p>
				</a>
			</div>
			
		
			<?php 		
		}
	?>
	</div>
</main>

<footer>
	<p>&copy;Cegep de Matane </p>
	<p>Réalisé par Botrel Jeremiah dans cadre du cours de base de donnée</p>
</footer>

</body>