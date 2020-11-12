<?php

//print_r($_POST);

$id = $_POST['id'];
$marque = addslashes($_POST['marque']);
$illustration = $_POST['illustration'];
$presentation = addslashes($_POST['presentation']);
$moteur = addslashes($_POST['moteur']);
$puissance = addslashes($_POST['puissance']);
$consommation = addslashes($_POST['consommation']);
$prix = addslashes($_POST['producteur']);
$description = addslashes($_POST['description']);

//echo "<div>" . $titre . "</div>";

$SQL_MODIFIER_VOITURE = "UPDATE voiture SET marque = '$marque', illustration='$illustration', presentation='$presentation', moteur='$moteur', puissance='$puissance', consommation='$consommation', prix='$prix', description = '$description'     WHERE id = " . $id;
//echo $SQL_MODIFIER_FILM;

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