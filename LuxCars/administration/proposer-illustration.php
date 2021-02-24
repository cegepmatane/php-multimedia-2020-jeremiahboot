<?php 
// tests dans html
// $_POST <pre><?php var_dump($_POST); ? ></pre>
// $_FILES <pre><?php print_r($_FILES); ? ></pre>


//move_uploaded_file($fichier_source,$fichier_destination);



$fichier_source = $_FILES['illustration']['tmp_name'];
echo "fichier source = " . $fichier_source . "<br>";

$racine_serveur = $_SERVER['DOCUMENT_ROOT']; // "C:\Bitnami\wampstack-7.1.26-0\apache2\htdocs";  // 
$repertoire_projet = "/etudiants/2019/botrelj/LuxCars"; ///etudiants/2019/botrelj/
$repertoire_image = "/illustration/";
$nom_image = $_FILES['illustration']['name'];
$fichier_destination = $racine_serveur . $repertoire_projet . $repertoire_image . $nom_image;
echo "fichier destination = " . $fichier_destination . "<br>";

$succes = move_uploaded_file($fichier_source, $fichier_destination);

if($succes) echo '<img src="../illustration/'.$nom_image.'">';
$illustration = $nom_image;
?>

<?php
$dimension_image = getimagesize('../illustration/' .$nom_image );
print_r($dimension_image);
$image_grande = imagecreatefromjpeg('../illustration/' .$nom_image);
$image_petite = imagecreatetruecolor(100, 100); // largeur, hauteur
imagealphablending($image_petite, FALSE);
imagesavealpha($image_petite, TRUE);
imagecopyresampled(
    $image_petite, $image_grande, 
    0,0,            0,20, //decalage
    100,100,        594, 594
);
imagejpeg($image_petite,'../illustration/mini' .$nom_image );

?>