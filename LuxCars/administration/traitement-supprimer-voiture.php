<?php

//print_r($_POST);

$id = filter_var($_POST['id'],FILTER_SANITIZE_STRING);


//echo "<div>" . $titre . "</div>";

$SQL_SUPPRIMER_VOITURE = "DELETE FROM voiture WHERE id = " . $id;
//echo $SQL_MODIFIER_FILM;

include "basededonnees.php"; 
$requeteSupprimerVoiture = $basededonnees->prepare($SQL_SUPPRIMER_VOITURE);
$reussiteSuppression = $requeteSupprimerVoiture->execute();
?>


<?php
if($reussiteSuppression) 
{
?>
	Votre voiture a été supprimée de la base de données
<?php	
}
?>