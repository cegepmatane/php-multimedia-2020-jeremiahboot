<?php 
	// PARTIE DONNEES
	include "basededonnees.php"; // copie-colle le code qui est dans connexion
	// prepare l'objet $basededonnees pour qu'on puisse parler à la base de données

	$MESSAGE_SQL_LISTE_ESPECES = "SELECT id, img, singe from especes";
	//echo $MESSAGE_SQL_LISTE_especesS;
	$requeteListeEspeces = $basededonnees->prepare($MESSAGE_SQL_LISTE_ESPECES);
	$requeteListeEspeces->execute();
	$especes = $requeteListeEspeces->fetchAll();
	//print_r($especess);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

    <title>Vanilla JavaScript Carousel</title>

    
    <link rel="stylesheet" href="styles/style.css">
    
    <!--[if IE 9]>
    <script src="//cdn.jsdelivr.net/classlist/2014.01.31/classList.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <h1>Quelques espèces de singes</h1>
    </header>

    <section>
    
        

        <div class="js-Carousel" id="carousel">
            <ul>
            <?php
                foreach ($especes as $especes) {

                    ?>
                            <li>
                                <h2 class="singes"><?php echo $especes['singe'];?></h2>
                                <img src="images/<?php echo $especes['img'];?>" alt="" class="fluid">
                            </li>
                    <?php

                }
            ?> 
            </ul>
        </div>
    </section>

    <script src="javascript/vanilla-js-carousel.min.js"></script>
    <script>
        var carousel = new Carousel({
            elem: 'carousel', // id of the carousel container
            autoplay: true,   // starts the rotation automatically
            infinite: true,   // enables infinite mode
            interval: 2000,   // interval between slide changes
            initial: 0,       // slide to start with
            dots: true,       // show navigation dots
            arrows: true,     // show navigation arrows
            buttons: true     // show play/stop buttons
        });
    </script>
</body>
</html>
