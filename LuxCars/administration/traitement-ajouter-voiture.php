<?php

print_r($_POST);
//https://www.php.net/manual/fr/function.addslashes.php
$marque = addslashes($_POST['marque']);
//$illustration = $_POST['illustration'];
$presentation = addslashes($_POST['presentation']);
$moteur = addslashes($_POST['moteur']);
$puissance = addslashes($_POST['puissance']);
$consommation = addslashes($_POST['consommation']);
$prix = addslashes($_POST['producteur']);
$description = addslashes($_POST['description']);

$fichier_source = $_FILES['illustration']['tmp_name'];
echo "fichier source = " . $fichier_source . "<br>";

$racine_serveur = $_SERVER['DOCUMENT_ROOT']; // "C:\Bitnami\wampstack-7.1.26-0\apache2\htdocs";  // 
$repertoire_projet = "/LuxCars";
$repertoire_image = "/img/";
$nom_image = $_FILES['illustration']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $nom_image;


$succes = move_uploaded_file($fichier_source, $fichier_destination);


$SQL_AJOUTER_VOITURE = "INSERT into voiture(marque, presentation, moteur, puissance, consommation, prix, description, illustration) VALUES('".$marque."','" . $presentation . "','" . $moteur . "','" . $puissance . "','" . $consommation . "','" . $prix . "','" . $description . "', '" . $nom_image . "')";


include "basededonnees.php"; 
$requeteAjouterVoiture = $basededonnees->prepare($SQL_AJOUTER_VOITURE);
$reussiteAjout = $requeteAjouterVoiture->execute();
?>


<?php
if($succes) echo '<img src="img/'.$nom_image.'">';
if($reussiteAjout) 

{
?>
	Votre Voiture a été ajouté à la base de données
	
<?php	
}
?>



<?php 
