-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 08 fév. 2019 à 08:06
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

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
(7, 'Bouret', 'Sebastien', 40, 'https://avenoel.org/images/avatars/Homoursporc_85a11b504cb93d232a8f24ea6e40b27b.gif', 'moustache ana sec', 'bas', 'Almalrich', 1, 'sebbou@yopmail.fr', 1),
(8, 'Meunier', 'Lubin', 30, 'https://i.pinimg.com/originals/0f/19/17/0f1917184ebda4be61faeef563600440.jpg', 'rien', 'bibinou', 'bibii', 1, 'lubinou@yopmail.fr', 1),
(9, 'Spilmont', 'Christophe', 27, 'https://images-na.ssl-images-amazon.com/images/I/61rBGr7wVoL._SY550_.jpg', 'frero', 'ccc', 'tof', 2, 'fake@mail.fr', 2),
(24, 'Spilmont', 'AndrÃ©', 31, 'https://i.ebayimg.com/images/g/-5IAAOSw13pbPe6i/s-l300.jpg', 'hh', 'spilmont', 'onatouvus', 1, 'dd_spilmont@hotmail.fr', 2);

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` bigint(20) NOT NULL,
  `competence` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `competence`, `end`) VALUES
(1, 'Maqueter une application', 'front'),
(2, 'Realiser une interface utilisateur web statique et adaptable', 'front'),
(3, 'Developper une interface utilisateur web dynamique ', 'front'),
(4, 'Creer une base de donnee', 'back'),
(5, 'Developper les composants d\'acces aux donnees', 'back'),
(6, 'Developper la partie backend d\'une application web et web mobile', 'back');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` bigint(20) NOT NULL,
  `evaluation admin` int(10) NOT NULL,
  `evaluation ae` int(10) NOT NULL,
  `id-competence` int(20) NOT NULL,
  `id-apprenant` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rank`
--

CREATE TABLE `rank` (
  `id` bigint(11) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rank`
--

INSERT INTO `rank` (`id`, `rank`) VALUES
(1, 'nom activé'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` bigint(100) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id`, `session`) VALUES
(1, '2019'),
(2, '2020');

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

CREATE TABLE `techno` (
  `id` bigint(20) NOT NULL,
  `techno` varchar(255) NOT NULL,
  `id_competence` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `techno`
--

INSERT INTO `techno` (`id`, `techno`, `id_competence`) VALUES
(11, 'html', 2),
(1, 'wireframe', 1),
(7, 'diagramme fonctionelle', 1),
(9, 'css', 2),
(12, 'javascript', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `techno`
--
ALTER TABLE `techno`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
