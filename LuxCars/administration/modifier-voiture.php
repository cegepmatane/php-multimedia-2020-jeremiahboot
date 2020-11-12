<?php

	//print_r($_GET);
	$noVoiture = $_GET['voiture'];

	$SQL_VOITURE = "SELECT * from voiture WHERE id = " . $noVoiture;
	//echo $SQL_FILM;
	
	include "basededonnees.php";
	$requeteVoiture = $basededonnees->prepare($SQL_VOITURE);
	$requeteVoiture->execute();
	$voiture = $requeteVoiture->fetch();
	//print_r($film);
?>

</head>
<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>LuxCars</title>

	 <link rel="stylesheet" href="style/style2.css">  
	
</head>

<body>
	
<header>
	<h1><a href="liste-voiture.php" class="logo">LuxCars</a></h1>
	<nav>
		<h2><a href="liste-voiture.php" class="panneauAdmin">Panneau d'administration</a></h2>
	</nav>
</header>
<body>
	<div class="titre">
		<h2>Modifier une voiture</h2>
	</div>
	
	<section class="contenu">
		
		<form action="traitement-modifier-voiture.php" method="post">
		
			<div class="champs">
				<label for="marque">Marque</label>
				<input type="text" name="marque" id="marque" value="<?php echo $voiture['marque']?>"/>			
			</div>
		
			<div class="champs">
				<label for="illustration">Illustration</label>
				<textarea name="illustration" id="illustration"><?php echo $voiture['illustration']?></textarea>			
			</div>
						
			<div class="champs">
				<label for="presentation">presentation</label>
				<textarea name="presentation" id="presentation"><?php echo $voiture['presentation']?></textarea>			
			</div>
			
			<div class="champs">
				<label for="moteur">moteur</label>
				<input type="text" name="moteur" id="moteur" value="<?php echo $voiture['moteur']?>"/>			
			</div>			
			
			<div class="champs">
				<label for="puissance">puissance</label>
				<input type="text" name="puissance" id="puissance" value="<?php echo $voiture['puissance']?>"/>			
			</div>

			<div class="champs">
				<label for="consommation">consommation</label>
				<input type="text" name="consommation" id="consommation" value="<?php echo $voiture['consommation']?>"/>			
			</div>

			<div class="champs">
				<label for="prix">prix</label>
				<input type="text" name="prix" id="prix" value="<?php echo $voiture['prix']?>"/>			
			</div>

			<div class="champs">
				<label for="description">description</label>
				<textarea name="description" id="description"><?php echo $voiture['description']?></textarea>			
			</div>				
			
			<input type="submit" value="Enregistrer">
			<input type="hidden" name="id" value="<?php echo $voiture['id']?>"/>
			
		</form>
	
	</section>
	
	<footer>
	<p>&copy;Cegep de Matane </p>
	<p>Réalisé par Botrel Jeremiah dans le cadre du cours de base de données</p>
</footer>

</body>
</html>