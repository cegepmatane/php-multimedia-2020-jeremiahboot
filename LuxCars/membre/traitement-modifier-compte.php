<?php
session_start();
    

    include "../basededonnees.php";

// name de la partie identité du formulaire
if (isset($_POST['modification-identite'])) {
    if (empty($_POST['organisation'])) {
        $_SESSION['erreur'] = "Veuillez renseigner tous les champs !";
        header("location: modifier-compte.php");
    } elseif (empty($_POST['courriel']) || !filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erreur'] = "Courriel invalide !";
        header("location: modifier-compte.php");
    } else {
        require_once "../basededonnees.php";
        $courriel = $_POST['courriel'];
        $TROUVER_COURRIEL = "SELECT id FROM membre WHERE courriel = '$courriel'";
        $requete = $basededonnees->prepare($TROUVER_COURRIEL);
        $requete->execute();
        $user = $requete->fetch();

        if ($user) {
            $_SESSION['erreur'] = "Ce courriel est déjà utilisé";
            header("location: modifier-compte.php");
        } else {
            $_SESSION['erreur'] = "Votre identité a été modifiée";
            header("location: modifier-compte.php");
        }
        if (!empty($_POST['modification-identite'])) {
            $filtreMembre = array(
                'organisation' => FILTER_SANITIZE_STRING,
                'courriel' => FILTER_SANITIZE_EMAIL,
        );
        
            $identite = filter_input_array(INPUT_POST, $filtreMembre);

            $_SESSION['membre']['organisation'] = $identite['organisation'];
            $_SESSION['membre']['courriel'] = $identite['courriel'];

            $MODIFIER_MEMBRE = "UPDATE membre SET organisation, courriel=:courriel WHERE pseudonyme = :pseudonyme"; 

            $requeteModifierMembre = $basededonnees ->prepare($MODIFIER_MEMBRE);
            
            $requeteAjouterMembre->bindParam(':organisation', $_SESSION['membre']['organisation'], PDO::PARAM_STR);   
            $requeteAjouterMembre->bindParam(':courriel', $_SESSION['membre']['courriel'], PDO::PARAM_STR);  
            $requeteAjouterMembre->bindParam(':pseudonyme', $_SESSION['membre']['pseudonyme'], PDO::PARAM_STR);   
            
            $requeteModifierMembre->execute();
               


        }
    }

   
    
    
    
    
    
    
                
      
// name de la partie sécurité du formulaire


}else if(isset($_POST['modification-securite']))
 {

     
if(empty($_POST['motdepasse']) || $_POST['motdepasse'] != $_POST['motdepasse2'])
       {
        $_SESSION['erreur2'] = "Vos mots de passe doivent etre identiques";
         header("location: modifier-compte.php");
       }else{
        $_SESSION['erreur2'] = "Votre mot de passe a ete modifie";
        header("location: modifier-compte.php");  
       }
    if(!empty(!$_POST['modification-securite'])){
        $filtreMembre = array(
            'motdepasse' => FILTER_SANITIZE_ENCODED,
            'motdepasse2' => FILTER_SANITIZE_ENCODED,
        'pseudonyme' => FILTER_SANITIZE_ENCODED,
        
        );

        $securite = filter_input_array(INPUT_POST, $filtreMembre);


      if(strcm($securite["motdepasse"], $securite["motdepasse2"]) == 0)

      $_SESSION['membre']['motdepasse'] = $informations['pseudonyme'];
      $_SESSION['membre']['motdepasse'] = $informations['motdepasse'];

      $securite['motdepasee'] = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
      
      $MODIFIER_MEMBRE = "UPDATE membre SET organisation, courriel=:courriel WHERE pseudonyme = :pseudonyme";
      $requeteModifierMembre->bindParam(':motdepasse', $_securite['motdepasse'], PDO::PARAM_STR);  
      $requeteModifierMembre->bindParam(':pseudonyme', $_securite['pseudonyme'], PDO::PARAM_STR);   
      $requeteModifierMembre = $basededonnees ->prepare($MODIFIER_MEMBRE);
    }
}

     