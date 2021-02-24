<?php
header("Content-type: text/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';
include "basededonnees.php"; 
$MESSAGE_SQL_LISTE_VOITURES = "SELECT id, marque, illustration, presentation from voiture";

$requeteListeVoitures = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURES);
$requeteListeVoitures->execute();
$listeVoitures = $requeteListeVoitures->fetchAll();



// https://support.google.com/webmasters/answer/183668?hl=en
?>


<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
  <url>
    <loc>https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/</loc>
    <lastmod>2020-12-19</lastmod>
  </url>
  <url>
    <loc>https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/liste-voitures.php</loc>
    <lastmod>2020-12-19</lastmod>
  </url>

  <?php 
  foreach($listeVoitures as $voiture)
  {
  ?>
  <url>
    <loc>https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/voiture.php?voiture=<?=$voiture['id']?></loc>
    <lastmod>2020-12-19</lastmod>
  </url>  
  <?php 
  }
  ?>
  
  
  
</urlset>