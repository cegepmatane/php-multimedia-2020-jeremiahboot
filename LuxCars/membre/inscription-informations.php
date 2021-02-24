<?php 
session_start();
 
	// Traitement de identification.php
	// 1ere étape de sécurisation = PHP FILTER
   

	if(isset($_POST['inscription-identification']))
	{
		if(empty($_POST['prenom'])
		|| empty($_POST['nom'])
		|| empty($_POST['organisation']))
		{
			$_SESSION['erreur'] = "veuillez renseigner tous les champs !";
			header("location: inscription-identification.php");
		}
		else if(empty($_POST['courriel']) || !filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['erreur'] = "Couriel invalide!";
			header("location: inscription-identification.php");

		}
		else{
			require_once "../basededonnees.php";
			$courriel = $_POST['courriel'];
			$TROUVER_COURRIEL = "SELECT id FROM membre WHERE courriel = '$courriel'";
			$requete = $basededonnees->prepare($TROUVER_COURRIEL);
			$requete ->execute();
			$user = $requete->fetch();

			if($user){
				$_SESSION['erreur'] = "Ce courriel est deja utilise";
				header("location: inscription-identification.php");

			}

			$filtreMembre = array(
				'prenom' => FILTER_SANITIZE_ENCODED,
				'nom' => FILTER_SANITIZE_ENCODED,
				'organisation' => FILTER_SANITIZE_STRING,
				'courriel' => FILTER_SANITIZE_EMAIL,
			);

			$_SESSION['membre'] = filter_input_array(INPUT_POST, $filtreMembre);
		}
	}
	 
	//print_r($_SESSION);



?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>luxcars</title>
</head>
<body>
	<header>
		
		<h1>Luxcars</h1>
		
		<nav>
		
		<div id="menu">
			<a href="index.php">Accueil</a> | 
			<a href="liste-voiture.php">Voiture</a> | 		
			<a href="recherche-avancee.php">Recherche</a> | 		
			<a href="membre.php">Membre</a> | 
			
		</div>
		
		</nav>
		

		</header>
	
	<section id="contenu">
		<header><h2>Membre</h2></header>


	<section id="contenu">
		<header><h2>Inscription d'un membre - Informations</h2></header>

		<span id="erreur2">
		<?php if(!empty($_SESSION['erreur2']))
		{
			echo $_SESSION['erreur2'];
			unset($_SESSION['erreur2']);
		}
		?>
		</span>
	
		<form method="post" action="traitement-inscription.php">
		
		
		<fieldset>
		
			<legend>Informations</legend>

			<div id="entree-pseudonyme">
				<label for="pseudonyme">Pseudonyme</label>
				<input type="text" id="pseudonyme" name="pseudonyme"/>
			</div>

			
			<div id="entree-motdepasse">
				<label for="motdepasse">Mot de passe</label>
				<input type="password" id="motdepasse" name="motdepasse"/>
			</div>	

			<div id="entree-motdepasse2">
				<label for="motdepasse2">Confirmation du mot de passe</label>
				<input type="password" id="motdepasse2" name="motdepasse2"/>
			</div>		
		
			
						
		</fieldset>
		
		<input type="submit" name="inscription-informations" value="Enregistrer">			
			
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>