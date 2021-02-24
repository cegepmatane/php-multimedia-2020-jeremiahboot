<?php
include "proposer-illustration.php";
print_r($_POST);
//https://www.php.net/manual/fr/function.addslashes.php
$marque = addslashes(filter_var($_POST['marque'],FILTER_SANITIZE_STRING));
//$illustration = $_POST['illustration'];
$presentation = addslashes(filter_var($_POST['presentation'],FILTER_SANITIZE_STRING));
$moteur = addslashes(filter_var($_POST['moteur'],FILTER_SANITIZE_STRING));
$puissance = addslashes(filter_var($_POST['puissance'],FILTER_SANITIZE_STRING));
$consommation = addslashes(filter_var($_POST['consommation'],FILTER_SANITIZE_STRING));
$prix = addslashes(filter_var($_POST['prix'],FILTER_SANITIZE_STRING));
$description = addslashes(filter_var($_POST['description'],FILTER_SANITIZE_STRING));

$fichier_source = $_FILES['illustration']['tmp_name'];
echo "fichier source = " . $fichier_source . "<br>";

$racine_serveur = $_SERVER['DOCUMENT_ROOT']; // "C:\Bitnami\wampstack-7.1.26-0\apache2\htdocs";  // 
$repertoire_projet = "/LuxCars"; ///etudiants/2019/botrelj/ 
$repertoire_image = "/illustration/";
$nom_image = $_FILES['illustration']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $nom_image;


$succes = move_uploaded_file($fichier_source, $fichier_destination);


$SQL_AJOUTER_VOITURE = "INSERT into voiture(marque, presentation, moteur, puissance, consommation, prix, description, illustration) VALUES('".$marque."','" . $presentation . "','" . $moteur . "','" . $puissance . "','" . $consommation . "','" . $prix . "','" . $description . "', '" . $nom_image . "')";


include "basededonnees.php"; 
$requeteAjouterVoiture = $basededonnees->prepare($SQL_AJOUTER_VOITURE);
$reussiteAjout = $requeteAjouterVoiture->execute();
?>


<?php
if($succes) echo '<img src="../illustration/'.$nom_image.'">';
if($reussiteAjout) 

{
?>
	Votre Voiture a été ajouté à la base de données
	
<?php	
}
?>



<?php 
