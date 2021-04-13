-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 13 avr. 2021 à 03:54
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp2_1932675`
--
CREATE DATABASE IF NOT EXISTS `tp2_1932675` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tp2_1932675`;

-- --------------------------------------------------------

--
-- Structure de la table `biere_1932675`
--

DROP TABLE IF EXISTS `biere_1932675`;
CREATE TABLE `biere_1932675` (
  `id_biere` int(11) NOT NULL COMMENT 'identifiant unique d''une bière',
  `nom` varchar(50) NOT NULL COMMENT 'Nom d''une bière',
  `nom_micro-brasserie` varchar(50) NOT NULL COMMENT 'Nom de la micro-brasserie',
  `type_biere` varchar(30) NOT NULL COMMENT 'type de bière',
  `degres_alcool` float(3,1) NOT NULL COMMENT 'Taux d''alcool dans la bière',
  `description` text NOT NULL COMMENT 'Description',
  `image` varchar(100) NOT NULL COMMENT 'image',
  `type_contenant` varchar(50) NOT NULL COMMENT 'Type de contenant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tronquer la table avant d'insérer `biere_1932675`
--

TRUNCATE TABLE `biere_1932675`;
--
-- Déchargement des données de la table `biere_1932675`
--

INSERT INTO `biere_1932675` (`id_biere`, `nom`, `nom_micro-brasserie`, `type_biere`, `degres_alcool`, `description`, `image`, `type_contenant`) VALUES
(1, 'LA MISSIVE', 'Le Malbord', 'Ale Blonde', 4.5, 'Postier à pied, Timothé Auclair, apporta les nouvelles le long du littoral haute‐gaspésien parfois au péril de sa vie. Cette bière blonde vous fait revivre l’aventure d’un livreur de courrier qui affronta la nature coupée par des caps et des falaises battues par la mer. Une bière de route, une bière qui coule bien. Une bière de soif bien méritée après une longue marche!', 'placeholder.jpg', 'canette'),
(2, 'TANTE TRICOTANTE', 'Microbrasserie du Lac-St-Jean', 'Triple', 8.0, 'Une bonne bière triple qui sait vous réchauffer tout comme le tricot de votre tante. Savourez sa mousse tricotée serrée, sa robe de paille et ses houblons francs en prenant un moment de détente avec des amis.', 'placeholder.jpg', 'bouteille'),
(3, 'CHARLES HENRI', 'Brasserie les 2 frères', 'Ale Ambrée Américaine', 6.2, 'En bouche, elle dévoile des notes de caramel écossais, de grains maltés et de céréales légèrement grillées. Elle nous offre en finale de délicieuses saveurs de houblon citronné.', 'placeholder.jpg', 'bouteille'),
(4, 'U ROUSSE', 'Unibroue', 'Ale Ambrée Américaine', 5.0, 'Bière de basse fermentation ayant une faible teneur en alcool, la U Rousse se veut avant tout fraîche et désaltérante tout en offrant plus d’amertume et de corps qu’une bière blonde traditionnelle. Compte tenu qu’il s’agit d’une bière de type pilsner, elle n’a pas l’arrière-goût âcre typique d’une bière rousse « ale » ni une odeur trop fruitée. C’est l’odeur du houblon qui prime son arôme; il s’agit de houblon Saaz, l’un des houblons les plus nobles au monde. L’utilisation d’un malt d’orge légèrement torréfié donne à la U rousse, ses beaux reflets cuivrés.', 'placeholder.jpg', 'bouteille'),
(5, 'TERRIBLE', 'Unibroue', 'Belge Forte', 10.5, 'La Terrible est une bière de garde qu\'Unibroue brasse rarement. Elle a été produite en 2002 puis en 2011. Cette bière du style Abbaye offre une saveur de fruits subtile avec des notes de vin de Madère. Si vous en trouvez, gardez-en, elle se conserve longtemps et elle n\'est pas produite très souvent.', 'placeholder.jpg', 'bouteille');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `biere_1932675`
--
ALTER TABLE `biere_1932675`
  ADD PRIMARY KEY (`id_biere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biere_1932675`
--
ALTER TABLE `biere_1932675`
  MODIFY `id_biere` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant unique d''une bière', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
