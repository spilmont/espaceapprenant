-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 fév. 2019 à 16:25
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espaceapprenants`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `avatar` text NOT NULL,
  `description` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `id_session` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rank_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id`, `nom`, `prenom`, `age`, `avatar`, `description`, `password`, `nom_utilisateur`, `id_session`, `email`, `rank_user`) VALUES
(1, 'spilmont', 'André', 31, 'achanger', 'j\'aime les pates', 'spilmont', 'onatouvus', 1, 'dd.spilmont59212@gmail.com', 2),
(7, 'bouret', 'sebastien', 40, 'https://avenoel.org/images/avatars/Homoursporc_85a11b504cb93d232a8f24ea6e40b27b.gif', 'moustache ana sec', 'bas', 'almalrich', 1, 'sebbou@yopmail.fr', 1),
(8, 'Meunier', 'Lubin', 30, '', '', 'bibinou', 'bibi', 1, 'lubinou@yopmail.fr', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
