<?php
session_start();

if(isset($_SESSION['membre']['pseudonyme']))
{
    //On detruit les variables session
    session_unset();

    //Supprimer les session
    session_destroy();

    header('location: ../index.php');

}
else{
    echo "vous n'etes pas connecte !";
}
?>