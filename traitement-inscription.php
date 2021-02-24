<?php 
session_start();


if(isset($_POST['inscription-informations']))

{
       if(empty($_POST['motdepasse']) || $_POST['motdepasse'] != $_POST['motdepasse2'])
       {
         $_SESSION['erreur2'] = "Vos mots de passe doivent être identiques";
         header("location:inscription-informations.php");
       }
       if(empty($_POST['pseudonyme']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['pseudonyme']))
       {
         $_SESSION['erreur2'] = "Votre pseudo n'est pas valide";
         header("location:inscription-informations.php");
        }
        else{
          
          include "../basededonnees.php";
          $pseudonyme = $_POST['pseudonyme'];
          $TROUVER_PSEUDO = "SELECT id FROM membre WHERE pseudonyme = '$pseudonyme'";
          $requete = $basededonnees->prepare($TROUVER_PSEUDO);
          $requete->execute();
          $user = $requete->fetch();
          if($user){

            $_SESSION['erreur2'] = 'Ce pseudo est déjà utilisé';

            header("location: inscription-informations.php");

          }

        }

                

      if (empty($_SESSION['erreur2'])){

        $filtreMembre = array(

          'pseudonyme' => FILTER_SANITIZE_STRING,
          'motdepasse' => FILTER_SANITIZE_ENCODED,

        );

        $informations = filter_input_array(INPUT_POST, $filtreMembre);
        $_SESSION['membre']['pseudonyme'] = $informations['pseudonyme'];
        $_SESSION['membre']['motdepasse'] = $informations['motdepasse'];
        // ici le mot de passe est inscrit en clair dans la BD.  Il faut le crypter avec password_hash

        $informations['motdepasse'] = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
        $AJOUTER_MEMBRE = "INSERT into membre (prenom, nom, pseudonyme, motdepasse, courriel, organisation) VALUES(:prenom, :nom, :pseudonyme, :motdepasse, :courriel, :organisation)";

        //echo $AJOUTER_MEMBRE;

        

        include "../basededonnees.php";

        

        $requeteAjouterMembre = $basededonnees->prepare($AJOUTER_MEMBRE);
        $requeteAjouterMembre->bindParam(':prenom', $_SESSION['membre']['prenom'], PDO::PARAM_STR);
        $requeteAjouterMembre->bindParam(':nom', $_SESSION['membre']['nom'], PDO::PARAM_STR);
        $requeteAjouterMembre->bindParam(':courriel', $_SESSION['membre']['courriel'], PDO::PARAM_STR);
        $requeteAjouterMembre->bindParam(':organisation', $_SESSION['membre']['organisation'], PDO::PARAM_STR);
        $requeteAjouterMembre->bindParam(':pseudonyme', $informations['pseudonyme'], PDO::PARAM_STR);
        $requeteAjouterMembre->bindParam(':motdepasse', $informations['motdepasse'], PDO::PARAM_STR);
        $requeteAjouterMembre->execute();
              
        if($requeteAjouterMembre)
          header("location: ../index.php");
        

   

    }



}

?>