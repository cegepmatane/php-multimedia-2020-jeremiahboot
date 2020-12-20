<?php
header("Content-type: text/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';
include "basededonnees.php"; // copie-colle le code qui recherche dans connexion
// prepare l'objet $basededonnees pour qu'on puisse parler à la base de données

$MESSAGE_SQL_LISTE_VOITURES = "SELECT id, marque, illustration, presentation from voiture";
//echo $MESSAGE_SQL_LISTE_FILM;

$requeteListeVoitures = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURES);
$requeteListeVoitures->execute();
$listeVoitures = $requeteListeVoitures->fetchAll();
//print_r($listeFilms);

?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
	<title>Liste des nouvelles voitures</title>
	<atom:link href="https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/" rel="self" type="application/rss+xml" />
	<link>https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/</link>
	<description>voitures</description>
	<lastBuildDate>Sat, 19 Dec 2020 11:40:00 +0000</lastBuildDate>
	<language>fr-CA</language>
	<sy:updatePeriod> hourly	</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<generator>Programmation manuelle</generator>
	<?php 
		foreach($listeVoitures as $voiture)
		{
	?>
		<item>
			<title><?=$voiture['marque']?></title>
			<link>https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/voiture.php?voiture=<?=$voiture['id']?></link>
			<pubDate>Sat, 19 Dec 2020 11:40:00 +0000</pubDate>
			<category><![CDATA[Voiture]]></category>
			<guid isPermaLink="false">https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/voiture.php?voiture=<?=$voiture['id']?></guid>
			<description>
			<![CDATA[<img src="https://tim.cgmatane.qc.ca/etudiants/2019/botrelj/luxcars/img/<?=$voiture['illustration']; ?>">]]>
			<![CDATA[<?=$voiture['presentation'] ;?>]]>
			</description>
			<content:encoded>
			<![CDATA[<?=$voiture['presentation']; ?>]]>
			</content:encoded>
		</item>
	<?php
		}
	?>
</channel>
</rss>