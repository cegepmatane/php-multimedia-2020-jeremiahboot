<?php
	$idVoiture = filter_var($_GET['voiture'], FILTER_SANITIZE_NUMBER_INT);

	$MESSAGE_SQL_VOITURE = "SELECT * FROM voiture WHERE id = " . $idVoiture;

	include "basededonnees.php";
	$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_VOITURE);
	$requeteListeVoiture->execute();
	$voiture = $requeteListeVoiture->fetch();

?>

<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title><?php echo $voiture['marque']; ?></title>
	<link rel="alternate" type="application/rss+xml" href="http://localhost/luxcars/rss.php" />
	<link rel="stylesheet" href="style/style.css"> 	
</head>

<body>

<header>
	<h1><a href="liste-voiture.php" class="logo">LuxCars</a></h1>
	<nav>
		<h2><a href="liste-voiture.php" class="acceuil">Acceuil</a></h2>
	</nav>
</header>

	<div class="contenu">
		<div class="voiture">
			<h3 class="marque">
				<?php echo $voiture['marque']; ?>
			</h3>
			<div class="illustration img"><img src="illustration/<?php echo$voiture['illustration']?>" alt="voiture"></div>
			<p class="moteur">Moteur: <?php echo $voiture['moteur']; ?></p>
			<p class="puissance">Puissance: <?php echo $voiture['puissance']; ?></p>
			<p class="consommation">Consommation: <?php echo $voiture['consommation']; ?></p>
			<p class="prix">Prix: <?php echo $voiture['prix']; ?></p>
			<p class="description"><?php echo $voiture['description']; ?></p>
		</div>
	
	</div>
	
<footer>
	<p>&copy;Cegep de Matane</p>
	<p>Réalisé par Botrel Jeremiah dans cadre du cours de base de donnée</p>
</footer>

</body>
