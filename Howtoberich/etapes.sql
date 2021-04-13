-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 13 avr. 2021 à 05:03
-- Version du serveur :  8.0.22
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `howtoberich`
--

-- --------------------------------------------------------

--
-- Structure de la table `etapes`
--

CREATE TABLE `etapes` (
  `id` int NOT NULL,
  `etapes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etapes`
--

INSERT INTO `etapes` (`id`, `etapes`, `description`) VALUES
(1, '1-Définissez vos objectifs et sachez quelles sont vos motivations.', 'Avant de faire quoi que ce soit, sachez que la route menant à la richesse n\'est pas des plus faciles. Il vous faudra trouver une source de motivation qui vous poussera à travers les heures difficiles et qui vous fera garder le cap même quand tout vous pousse à l\'abandon. Imaginer vos objectifs, c\'est-à-dire déterminer où vous voulez être dans dix ou vingt ans ou à quarante ans, peut faire partie de cela.\r\nBien qu\'il soit parfaitement acceptable de vouloir être riche pour vous-même, vous serez peut-être également motivé par ce que vous pourrez faire pour les autres. Imaginez la vie que vous pourrez donner à vos futurs enfants ou à la personne qui accompagne votre vie.\r\nN\'ayez pas peur de voir en grand. Par exemple, si vous voulez gagner un million d\'euros nets, peut-être que vous vous limitez. N\'ayez pas peur de viser 20 millions d\'euros, voire 100 millions.\r\nPensez également à ce que vous entendez par richesse. Voulez-vous gagner 1 million d\'euros (ou plus) en revenus annuels, en avoirs nets ou en actifs ? Ce sont toutes des choses différentes et elles peuvent être obtenues de différentes façons.'),
(2, '2-Travaillez dur pour obtenir un bon travail.', 'Si vous n\'avez pas un emploi avec des perspectives d\'avenir, trouvez-en un. Le secret pour devenir riche est d\'avoir une source de revenus stable et croissante. Pour faire cela, il vous faudra avoir un travail, même si vous travaillez pour vous-même. Bien évidemment, le travail idéal variera d\'une personne à une autre et dépendra des talents et de la formation de chacun. Dans tous les cas, cependant, assurez-vous de faire un travail qui vous passionne, car vous ne réussirez jamais autrement.\r\nEssayez de chercher un emploi dans une grande entreprise, ce qui vous laissera plein d\'opportunités pour avancer. Évitez les jobs qui ne récompensent pas les efforts avec des augmentations et des primes.\r\nPour plus d\'informations, allez voir comment trouver le métier de vos rêves.'),
(3, '3-Augmentez vos sources de revenus', 'En plus d\'accroitre votre source de revenus principale (en montant les échelons de votre entreprise actuelle ou en trouvant un autre emploi), vous devriez essayer de décupler vos revenus en cherchant des sources de revenus supplémentaires. Il peut s\'agir d\'investissements, d\'emplois à temps partiel ou toute sorte de vente ou de consultation que vous aurez le temps de faire. De façon générale, essayez de voir où et comment vous pouvez accroitre vos revenus et répétez la manoeuvre encore et encore. Par exemple, si vous êtes propriétaire d\'un magasin en ligne qui fonctionne bien ouvrez-en un autre, puis encore un autre.\r\nInternet est une véritable mine d\'or en terme d\'opportunités de gagner de l\'argent. Il existe une pléiade de jobs que vous pouvez trouver ou créer en ligne pour obtenir une source de revenus par ce biais. Tout peut vous faire gagner des revenus mensuels supplémentaires, que ce soit écrire et vendre un ebook ou tenir un blog [10] . Pour des informations supplémentaires, allez voir comment gagner de l\'argent sur Internet.'),
(4, '4-Travaillez très dur', 'Avec tout le travail que vous faites, l\'entretien de vos réseaux et vos projets en parallèle, vous serez parfois surmené. Cependant, il vous faudra travailler plus dur que les autres et jusqu\'à plus tard pour atteindre vos objectifs. Vous devrez faire avancer toutes les opportunités potentielles, même si elles ne donnent rien au final. La réussite vient du travail constant pour avancer vers vos objectifs et de la persévérance lors des temps difficiles.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etapes`
--
ALTER TABLE `etapes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etapes`
--
ALTER TABLE `etapes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
