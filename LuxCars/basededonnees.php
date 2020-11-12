

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $adresseCourante = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $estSurServeurTim = strpos($adresseCourante, 'tim.cgmatane.qc.ca') !==false ? true : false;

    if ($estSurServeurTim) {
        $usager = 'tim_botrelj';
        $motdepasse = 'JzBJqEkqak';
        $hote = 'localhost';
        $base = 'tim_botrelj';
    }
    else {
        $usager = 'root';
        $motdepasse = '14062000';
        $hote = 'localhost';
        $base = 'luxcars';
    }

    $dsn = 'mysql:dbname='.$base.';host=' . $hote;
    $basededonnees = new PDO($dsn, $usager, $motdepasse);
    // Configurer la gestion d'erreurs
    $basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // La ligne suivante est importante pour empêcher les problèmesd'affichages
    $basededonnees->exec( 'SET CHARACTER SET UTF8' );

    return $basededonnees;
    // l'objet $basededonnees sera avec lequel que nous allons pouvoir travailler avec la base de données
?>