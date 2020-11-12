<?php 
// tests dans html
// $_POST <pre><?php var_dump($_POST); ? ></pre>
// $_FILES <pre><?php print_r($_FILES); ? ></pre>


//move_uploaded_file($fichier_source,$fichier_destination)

//print_r($_FILES['pixels']);
//echo $_FILES['pixels']['tmp_name'];
//echo $_FILES['pixels']['name'];
//echo $_FILES['pixels']['type'];
//echo $_FILES['pixels']['error'];
//echo $_FILES['pixels']['size'];

$fichier_source = $_FILES['pixels']['tmp_name'];
echo "fichier source = " . $fichier_source . "<br>";

$racine_serveur = $_SERVER['DOCUMENT_ROOT']; // "C:\Bitnami\wampstack-7.1.26-0\apache2\htdocs";  // 
$repertoire_projet = "/serveur-pixels";
$repertoire_image = "/illustration/";
$nom_image = $_FILES['pixels']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $nom_image;
echo "fichier destination = " . $fichier_destination . "<br>";

$succes = move_uploaded_file($fichier_source, $fichier_destination);

if($succes) echo '<img src="illustration/'.$nom_image.'">';
?>


