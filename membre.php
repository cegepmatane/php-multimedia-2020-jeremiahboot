<?php 
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<header>

	<nav>
		
		<div id="menu">
			<a href="index.php">Accueil</a> | 
			<a href="liste-voiture.php">Voiture</a> | 		
			<a href="recherche-avancee.php">Recherche</a> | 		
			<a href="membre.php">Membre</a> | 
			
		</div>
		
	</nav>


</header>

			<main>
		<h1>Luxcar</h1>
		
		<div id="bienvenu-membre">
 
            <?php
 
                if(isset($_SESSION['membre']['pseudonyme']) && !empty ($_SESSION['membre']['pseudonyme']))
 
                    {
 
                        ?> Bonjour <?= $_SESSION['membre'] ['prenom'] . "!";
 
                    echo '<div>
 
                            <a href="membre/modifier-compte.php">Modifier mon compte</a>
 
                        </div>';
 
                    echo '<div>
 
                            <a href="membre/deconnexion.php">Se deconnecter</a>
 
                        </div>';
 
                    }
 
            ?>
 
        </div>
		
	
	
		

	
	
		<section id="contenu2"> 
 
            
 
            <h2>Membre</h2>
 
            <?php
 
                if(empty($_SESSION['membre']['pseudonyme'])){
 
                    include_once "membre/formulaire-membre-authentification.php";
 
                    echo '<div>
 
                
 
                    <a href="membre/inscription-identification.php" class="creation">Créer un compte</a>
 
                    </div>';
 
            
 
                }
 
                else {
 
                    include_once "membre/vue-membre-detail.php";
 
                }
 
                
 
            
 
            ?>
 
        </section>
	</main>
	<footer><span id="signature"></span></footer>
</body>
</html>