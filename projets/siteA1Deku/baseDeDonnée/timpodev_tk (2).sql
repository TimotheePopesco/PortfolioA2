-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 mai 2021 à 19:36
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `timpodev.tk`
--

-- --------------------------------------------------------

--
-- Structure de la table `article1`
--

CREATE TABLE `article1` (
  `id` int(11) NOT NULL,
  `pseudo1` varchar(30) NOT NULL,
  `message1` text NOT NULL,
  `date_heure_msg1` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article1`
--

INSERT INTO `article1` (`id`, `pseudo1`, `message1`, `date_heure_msg1`) VALUES
(1, 'euytj', 'jhhrtyj', '2021-05-09 17:26:33'),
(2, 'fgfdgkùfobgj,s', 'fgsdfgfqdlkmghg\r\nfggfqd\r\ngfqd\r\nbdfbfdobhfdqbuhdfiubllfdgvgfvsdgvsdgvsovgydsfovgsdovygsdfgsdg', '2021-05-09 17:45:49'),
(4, 'vdgfdb', 'fdhdbsdfb', '2021-05-09 18:00:43'),
(5, 'efszefsef', 'ef:hjsl:', '2021-05-09 18:01:50'),
(6, '', '', '2021-05-09 18:02:36'),
(7, '', '', '2021-05-09 18:02:46'),
(8, '', '', '2021-05-09 18:03:27'),
(9, '', '', '2021-05-09 18:08:58'),
(10, '', '', '2021-05-09 18:09:38'),
(11, '', '', '2021-05-09 18:10:19'),
(12, '', '', '2021-05-09 18:11:06'),
(13, '', '', '2021-05-09 18:14:55'),
(14, '', '', '2021-05-09 18:25:47'),
(15, '', '', '2021-05-09 18:26:27'),
(16, '', '', '2021-05-09 18:26:33'),
(17, 'sdfsd', 'sdfsdf', '2021-05-09 18:26:43'),
(18, 'ef', 'zf', '2021-05-09 18:31:57');

-- --------------------------------------------------------

--
-- Structure de la table `article2`
--

CREATE TABLE `article2` (
  `id` int(11) NOT NULL,
  `pseudo2` varchar(30) NOT NULL,
  `message2` text NOT NULL,
  `date_heure_msg2` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article2`
--

INSERT INTO `article2` (`id`, `pseudo2`, `message2`, `date_heure_msg2`) VALUES
(1, '', '', '2021-05-09 18:00:43'),
(2, '', '', '2021-05-09 18:01:50'),
(3, '', '', '2021-05-09 18:02:36'),
(4, 'fgsngfsn', 'fsgnsfgn', '2021-05-09 18:02:46'),
(5, 'fgsngfsn', 'fsgnsfgn', '2021-05-09 18:03:27'),
(6, '', '', '2021-05-09 18:08:58'),
(7, '', '', '2021-05-09 18:09:38'),
(8, 'thrh', 'rth', '2021-05-09 18:10:19'),
(9, 'thrh', 'rth', '2021-05-09 18:11:06'),
(10, 'thrh', 'rth', '2021-05-09 18:14:55'),
(11, '', '', '2021-05-09 18:25:47'),
(12, '', '', '2021-05-09 18:26:27'),
(13, 'dsf', 'sdf', '2021-05-09 18:26:33'),
(14, '', '', '2021-05-09 18:26:43'),
(15, '', '', '2021-05-09 18:31:57'),
(16, 'fzefze', 'zefzf', '2021-05-09 18:32:05');

-- --------------------------------------------------------

--
-- Structure de la table `article3`
--

CREATE TABLE `article3` (
  `id` int(11) NOT NULL,
  `pseudo3` varchar(30) NOT NULL,
  `message3` text NOT NULL,
  `date_heure_msg3` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article3`
--

INSERT INTO `article3` (`id`, `pseudo3`, `message3`, `date_heure_msg3`) VALUES
(1, '', '', '2021-05-09 18:00:43'),
(2, '', '', '2021-05-09 18:01:50'),
(3, 'fjjfh', 'gfsnfsgn', '2021-05-09 18:02:36'),
(4, '', '', '2021-05-09 18:02:46'),
(5, '', '', '2021-05-09 18:03:27'),
(6, 'heel', 'Bonjour aujourd\'hui nous allons voir comment :\r\na\r\nz\r\ne\r\nr\r\nt\r\ny\r\nu\r\ni\r\no\r\np\r\nq\r\ns\r\nd\r\nf\r\ng\r\nh\r\nj\r\nk\r\nl\r\nm\r\nw\r\nx\r\nc\r\nv\r\nb\r\nn', '2021-05-09 18:08:58'),
(7, 'srfg', 'dfgdfsg\r\ndfgdsf\r\ngdgfg\r\nsdfgdfg\r\ndsgf\r\ndfg\r\ndfs\r\ng\r\ndsfg\r\nfds\r\ngfds\r\ngfds\r\ngfdgfdsgsdfgfdsgs', '2021-05-09 18:09:38'),
(8, '', '', '2021-05-09 18:10:19'),
(9, '', '', '2021-05-09 18:11:06'),
(10, '', '', '2021-05-09 18:14:55'),
(11, 'dsfsd', 'sfdsdf', '2021-05-09 18:25:47'),
(12, 'dsfsd', 'sfdsdf', '2021-05-09 18:26:27'),
(13, '', '', '2021-05-09 18:26:33'),
(14, '', '', '2021-05-09 18:26:43'),
(15, '', '', '2021-05-09 18:31:57'),
(16, '', '', '2021-05-09 18:32:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article1`
--
ALTER TABLE `article1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article2`
--
ALTER TABLE `article2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article3`
--
ALTER TABLE `article3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article1`
--
ALTER TABLE `article1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `article2`
--
ALTER TABLE `article2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `article3`
--
ALTER TABLE `article3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
