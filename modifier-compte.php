<?php
session_start(); 
// 1- Création de la $_SESSION

// 2- Utilisation de la session avec le pseudonyme
$pseudonymeSession = $_SESSION['membre']['pseudonyme'];
//echo $pseudonymeSession

include "../basededonnees.php";

$SQL_LIRE_MEMBRE = "SELECT * FROM membre WHERE pseudonyme = '$pseudonymeSession'";
//echo $SQL_LIRE_MEMBRE;

$requeteMembre = $basededonnees->prepare($SQL_LIRE_MEMBRE);
$requeteMembre->execute();
$membre = $requeteMembre->fetch();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
</head>

<body>
    <header>

    

        <nav>

            <div id="menu">
                <a href="../index.php">Accueil</a> |
                <a href="../liste-voiture.php">Voitures</a> |
                <a href="../recherche-avancee.php">Recherche</a> |
                <a href="../membre.php">Membre</a> |
            </div>

        </nav>


    </header>


    <section id="contenu">
        <header>
            <h2>Mon compte</h2>
        </header>
        <span id="erreur">
		<?php if(!empty($_SESSION['erreur']))
		{
			echo $_SESSION['erreur'];
			unset($_SESSION['erreur']);
		}
		?>
		</span>

        <form action="traitement-modifier-compte.php" method ="post">

            <fieldset> 
                <legend>Identité</legend>


                <div id="entree-organisation">
                    <label for="organisation">Organisation</label>
                    <input type="text" id="organisation" name="organisation" value='<?=$membre['organisation']?>' />
                </div>

                <div id="entree-courriel">
                    <label for="courriel">Courriel</label>
                    <input type="email" id="courriel" name="courriel" value='<?=$membre['courriel']?>' />
                </div>

            </fieldset>
           <!--Le champ pseudonyme est caché  -->
            <input type="hidden" name="pseudonyme" value='<?=$membre['pseudonyme']?>'>



            <input type="submit" name="modification-identite" value="Sauvegarder les changements">

        </form>
        
        <span id="erreur2">
		<?php if(!empty($_SESSION['erreur2']))
		{
			echo $_SESSION['erreur2'];
			unset($_SESSION['erreur2']);
		}
		?>
		</span>


        <form action="traitement-modifier-compte.php" method="post">
            <fieldset>
                <legend>Sécurité</legend>

                <div id="entree-motdepasse">
                    <label for="motdepasse">Nouveau mot de passe</label>
                    <input type="password" id="motdepasse" name="motdepasse" />
                </div>

                <div id="entree-motdepasse-confirmation">
                    <label for="motdepasse-confirmation">Confirmer le nouveau mot de passe</label>
                    <input type="password" id="motdepasse2" name="motdepasse2" />
                </div>

            </fieldset>

            <input type="hidden" name="pseudonyme" value='<?= $membre["pseudonyme"]; ?>'>

            <input type="submit" name="modification-securite" value="Sauvegarder les changements">
        </form>

    </section>

    <footer><span id="signature"></span></footer>
</body>

</html>