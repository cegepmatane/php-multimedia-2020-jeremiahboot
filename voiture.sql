-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 28 sep. 2020 à 13:59
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `luxcars`
--

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int NOT NULL,
  `marque` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `illustration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `presentation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `moteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `puissance` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `consommation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `prix` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `illustration`, `presentation`, `moteur`, `puissance`, `consommation`, `prix`, `description`) VALUES
(1, 'Ferrari 488 GTB', 'ferrari488pista.jpg', 'La Ferrari 488 GTB est une voiture de sport du constructeur italien Ferrari,  La version radicale de la 488 GTB, est présentée au Salon international de l\'automobile de Genève 2018, son nom : 488 Pista', 'V8 3.9', '720 ch', '16 L/100 km mixte', 'à partir de 410 580 $ CA', 'La 488 Pista perd 90 kg, son poids à sec est donc ramené à 1 280 kg. La puissance passe la barre des 700 ch prévus à 720 ch et 770 Nm de couple. Le 0 à 100 km/h est avalé en 2,85 secondes tandis que le 0 à 200 km/h passe à 7,6 secondes (données d\'usine) ce qui en fait la plus performante de sa catégorie (McLaren 720S et Porsche 991 GT2 RS). La vitesse de pointe passe à 340 km/h.\r\n\r\nLa carrosserie subit de profondes modifications esthétiques afin d\'augmenter l\'appui aérodynamique de 20 % par rapport à la 488 GTB. Elle est aussi la 1ère Ferrari de série à embarquer le Ferrari Dynamic Enhancer (FDE). Ce système ajuste automatiquement la pression de freinage sur les étriers. Le moteur est identique à la 488 GTB, la cylindrée est donc conservée, mais il a subi de nombreuses modifications, notamment au niveau de l\'admission d\'air et des deux turbos en provenance de la 488 GT3.'),
(2, 'Aston Martin DB11', 'astonmartinDB11.jpg', 'L\'Aston Martin DB11 est une automobile Grand Tourisme Coupé et Cabriolet 2+2 du constructeur automobile britannique Aston Martin. Elle est présentée au salon international de l\'automobile de Genève 2016.', 'V12 5.2 biturbo', '639 ch', '11,4 L/100 km', 'à partir de 236 400 $ CA', 'La DB11 succède à la DB9 restée 13 ans au catalogue d\'Aston Martin. Il s\'agit de la première nouveauté d\'un plan de la marque visant à sortir un modèle tous les 9 mois d\'ici 2021. Cette GT met également fin à une longue période sans nouveauté majeure pour le label sportif.\r\n\r\nElle est révélée le 1er mars 2016 lors du salon international de l\'automobile de Genève 2016. Elle est produite dans l\'usine de la marque à partir de septembre 2016, à Gaydon (Angleterre). Sa commercialisation débute au dernier trimestre 2016.'),
(3, 'Lamborghini Aventador', 'lamborghiniAventador.jpg', 'La Lamborghini Aventador LP700-4, connue en interne sous les codes « LB834 » (coupé) et « LB835 » (roadster), est une supercar développée par le constructeur automobile italien Lamborghini.', 'V12 atmosphérique', '700 à 770 ch', '10,7 à 24,7 L/100 km', 'à partir de 464 009 $ CA', 'Elle affiche une puissance de 700 ch et un 0 à 100 km/h en 2,9 secondes seulement1. L\'Aventador a été en mesure d\'abattre le kilomètre départ arrêté en moins de 20 secondes (19,3 secondes). Dans l\'émission britannique Top Gear, l\'Aventador de Jeremy Clarkson a été poussée à 328,6 km/h sur le circuit de Nardò, pour un défi entre une Aventador, une Noble M600 conduite par Richard Hammond (329,8 km/h) et une McLaren MP4-12C conduite par James May (314 km/h). L\'Aventador s\'annonce donc comme la plus performante des Lamborghini (elle a depuis cependant été surpassée par la Centenario de 770 ch).\r\n\r\nGrâce aux techniques développées par Lamborghini concernant l\'utilisation du carbone (une usine spéciale a été conçue), l\'Aventador est la première Lamborghini de série dotée d\'un châssis monocoque en fibre de carbone. Cette spécificité lui permet d\'économiser du poids et d’être exceptionnellement rigide.\r\n\r\nQuestion design, l\'Aventador s\'impose par un style agressif et radical. Avec la Reventón et la Sesto Elemento, l\'Aventador exprime un tournant dans le design des Lamborghini.\r\n\r\nEn septembre 2020, Lamborghini annonce la production du 10 000 ème exemplaire de Lamborghini Aventador depuis 20112. Le modèle est une Aventador SVJ Roadster de couleur grise avec des touches rouges et noires');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
