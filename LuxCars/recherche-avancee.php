<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Luxcars</title>
	<link rel="stylesheet" href="style/style.css">  
	<style>
	#recherche-rapide > h3 > span {display:none;}
	</style>
</head>
<body>
<header>
	<h1><a href="liste-voiture.php" class="logo">LuxCars</a></h1>
	<nav>
		
		<div id="menu">
			<a href="index.php">Accueil</a> | 
			<a href="liste-voiture.php">Voitures</a> | 		
			<a href="recherche-avancee.php">Recherche</a> | 		
		</div>
		
		</nav>
	</header>
	
	<section id="contenu">
		<header><h2>Recherche avancée</h2></header>
		
			<div id="recherche-avancee">
			
			<form method="get" action="resultat-recherche-avancee.php">
			
				<div>
					<label for="recherche-marque">Marque</label>
					<input type="text" name="recherche-marque" id="recherche-marque"/>				
				</div>
				<div>
					<label for="recherche-contenu">Contenu</label>
					<input type="text" name="recherche-contenu" id="recherche-contenu"/>				
				</div>				
				<div>
					<label for="recherche-moteur">Moteur</label>
					<input type="text" name="recherche-moteur" id="recherche-moteur"/>				
				</div>				
				<input type="submit" value="Recherche"/>
			</form>		
		
		</div>
	
	</section>
	
	<footer><span id="signature"></span>
	<p>&copy;Cegep de Matane </p>
	<p>Réalisé par Botrel Jeremiah dans cadre du cours de base de donnée</p>

</footer>
</body>
</html>