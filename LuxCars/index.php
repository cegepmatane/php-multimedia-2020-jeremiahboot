<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Cinéma du monde</title>
	<link rel="alternate" type="application/rss+xml" href="https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/rss.php" />
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
			<a href="liste-voiture.php">voitures</a> | 		
			<a href="recherche-avancee.php">Recherche</a> | 		
		</div>
		
		</nav>
	</header>
	
	<section id="contenu">
		
		<div id="barre-laterale">
		
			<div id="recherche-rapide">
			
				<h3><span>Recherche</span></h3>
				<form method="get" action="resultat-recherche-rapide.php">
					<input type="text" name="mot" placeholder="Recherche"/>
					<input type="submit" value="OK"/>
				</form>
				
			</div>
		
		
		</div>
	
	</section>
	
	<footer><span id="signature"></span>
	<p>&copy;Cegep de Matane </p>
	<p>Réalisé par Botrel Jeremiah dans cadre du cours de base de donnée</p>
</footer>
</body>
</html>