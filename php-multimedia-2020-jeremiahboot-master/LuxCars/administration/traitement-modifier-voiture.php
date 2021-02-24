<?php

//print_r($_POST);
/*$FILTRES_VOITURE = array(
	 "id"=> FILTER_SANITIZE_NUMBER_INT,
	 "marque"=> FILTER_SANITIZE_STRING,
	 "presentation"=> FILTER_SANITIZE_STRING,
	 "moteur"=> FILTER_SANITIZE_STRING,
	 "puissance"=> FILTER_SANITIZE_STRING,
	 "consommation"=> FILTER_SANITIZE_STRING,
	 "prix"=> FILTER_SANITIZE_STRING,
	 "description"=> FILTER_SANITIZE_STRING

);*/
//$voiture = filter_input_array(INPUT_POST, $FILTRES_VOITURE); 
 
$id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
$marque = addslashes(filter_var($_POST['marque'],FILTER_SANITIZE_STRING));
$illustration = $_POST['illustration'];
$presentation = addslashes(filter_var($_POST['presentation'],FILTER_SANITIZE_STRING));
$moteur = addslashes(filter_var($_POST['moteur'],FILTER_SANITIZE_STRING));
$puissance = addslashes(filter_var($_POST['puissance'], FILTER_SANITIZE_STRING));
$consommation = addslashes(filter_var($_POST['consommation'],FILTER_SANITIZE_STRING));
$prix = addslashes(filter_var($_POST['prix'],FILTER_SANITIZE_STRING));
$description = addslashes(filter_var($_POST['description'],FILTER_SANITIZE_STRING));

//echo "<div>" . $titre . "</div>";

$SQL_MODIFIER_VOITURE = "UPDATE voiture SET marque = '$marque', illustration='$illustration', presentation='$presentation', moteur='$moteur', puissance='$puissance', consommation='$consommation', prix='$prix', description = '$description'     WHERE id = " . $id;
//echo $SQL_MODIFIER_VOITURE;

include "basededonnees.php"; 
$requeteModifierVoiture = $basededonnees->prepare($SQL_MODIFIER_VOITURE);
$reussiteModification = $requeteModifierVoiture->execute();
?>


<?php
if($reussiteModification) 
{
?>
	Votre voiture a été modifié dans la base de données
<?php	
}
?>