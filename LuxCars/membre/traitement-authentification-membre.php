<?php 
session_start(); 





//print_r($_POST);

// 1ere étape de sécurisation = PHP FILTER

$filtreMembre = array();
$filtreMembre['pseudonyme'] = FILTER_SANITIZE_STRING;
$filtreMembre['motdepasse'] = FILTER_SANITIZE_STRING;
$membre = filter_var_array($_POST,$filtreMembre);

$pseudonyme = $membre['pseudonyme'];
include "../basededonnees.php";
$SQL_AUTHENTIFICATION = "SELECT * FROM membre WHERE pseudonyme = '$pseudonyme'";

//echo $SQL_AUTHENTIFICATION;
$requeteAuthentification = $basededonnees->prepare($SQL_AUTHENTIFICATION);
$requeteAuthentification->execute();
$membreVerification = $requeteAuthentification->fetch();

//print_r($membreVerification);

// Verifier si le mot de passe du formulaire ($motdepasse) est le meme que celui dans la base de donnees ($membre['motdepasse'])

if(password_verify($membre['motdepasse'], $membreVerification['motdepasse']))

{

	//echo "C'est le bon mot de passe";

	$_SESSION['membre'] = array();
	$_SESSION['membre']['pseudonyme'] = $membreVerification['pseudonyme'];
	$_SESSION['membre']['motdepasse'] = $membreVerification['motdepasse'];
	$_SESSION['membre']['prenom'] = $membreVerification['prenom'];
	$_SESSION['membre']['nom'] = $membreVerification['nom'];
	$_SESSION['membre']['courriel'] = $membreVerification['courriel'];
	$_SESSION['membre']['organisation'] = $membreVerification['organisation'];
	header("location: ../membre.php");

}

else

{

	echo "Ce n'est pas le bon mot de passe";	

}



?>