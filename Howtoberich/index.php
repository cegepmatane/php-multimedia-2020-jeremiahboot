<?php
include "basededonnees.php";

$SQL_LISTER_ETAPES = "SELECT * FROM etapes";

$requeteListerETAPES = $basededonnees->prepare($SQL_LISTER_ETAPES);
$requeteListerETAPES->execute();
$ETAPES = $requeteListerETAPES->fetchAll(PDO::FETCH_OBJ);
// print_r($ETAPES);
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">

    <title>Howtoberich</title>

    <link rel="stylesheet" href="styles/vanilla-js-accordion.css" />
</head>

<body>

    <header>
        <h1>Comment devenir riche?</h1>
    </header>

    <section>
        <h2>Être riche en quatre étapes :</h2>

        <div class="js-Accordion" id="accordion">

            <?php

foreach ($ETAPES as $etape) {
    ?>
            <button><?=$etape->etapes?></button>
            <div><?=$etape->description?>
            </div>

            <?php

}
?>

            <script src="javascript/vanilla-js-accordion.min.js"></script>
            <script>
            var accordion = new Accordion({
                element: "accordion",
                openTab: 1,
                oneOpen: true
            });
            </script>
</body>

</html>