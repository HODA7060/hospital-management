-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 avr. 2023 à 15:10
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cabinetmedical`
--

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `num_rend` int NOT NULL AUTO_INCREMENT,
  `date_rend` date NOT NULL,
  `heure_rend` time DEFAULT NULL,
  `num_secrt` int NOT NULL,
  `num_util` int NOT NULL,
  `obser_rend` char(255) NOT NULL,
  PRIMARY KEY (`num_rend`),
  KEY `num_secrt` (`num_secrt`),
  KEY `num_util` (`num_util`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`num_rend`, `date_rend`, `heure_rend`, `num_secrt`, `num_util`, `obser_rend`) VALUES
(1, '2010-12-12', '00:00:00', 0, 0, 'HAI'),
(2, '2010-12-12', '00:00:00', 0, 0, 'HAI'),
(3, '2023-12-12', '00:00:00', 0, 0, '222222222222'),
(4, '2023-12-12', '00:00:00', 0, 0, ''),
(8, '0000-00-00', '00:00:00', 0, 0, ''),
(6, '2023-04-01', '00:00:00', 0, 0, ''),
(7, '2023-12-12', '00:00:00', 0, 0, ''),
(9, '2022-01-01', '00:00:00', 0, 0, ''),
(10, '2020-03-02', '00:00:00', 0, 0, ''),
(11, '2022-01-01', '00:00:00', 0, 0, ''),
(12, '2022-02-23', '00:00:00', 0, 0, ''),
(13, '2023-02-02', '00:00:00', 0, 0, ''),
(17, '2023-04-09', '00:00:00', 0, 0, ''),
(15, '2023-11-11', '00:00:00', 0, 0, ''),
(16, '2023-04-16', '00:00:00', 0, 0, ''),
(18, '2023-12-12', '08:30:02', 0, 5, ''),
(19, '2023-12-12', '08:30:30', 0, 10, ''),
(20, '2023-12-12', '13:25:00', 0, 0, ''),
(21, '2022-12-12', '15:50:00', 0, 0, ''),
(22, '2023-12-12', '08:31:00', 0, 0, ''),
(23, '2023-12-12', '02:02:00', 0, 0, ''),
(24, '2023-04-15', '12:12:00', 0, 0, 'help'),
(25, '2023-04-22', '18:34:00', 0, 0, 'help'),
(26, '2023-03-30', '19:03:00', 0, 0, 'help'),
(27, '2023-04-28', '19:05:00', 0, 0, 'help'),
(28, '2023-05-07', '08:01:00', 0, 0, 'HI'),
(29, '2023-05-07', '08:01:00', 0, 0, 'HI'),
(30, '2023-05-07', '08:01:00', 0, 0, 'HI'),
(31, '2023-05-07', '08:01:00', 0, 0, 'HI'),
(32, '2023-05-07', '08:01:00', 0, 0, 'HI'),
(33, '2023-05-07', '08:01:00', 0, 0, 'HI'),
(34, '2023-04-01', '16:24:00', 0, 31, 'qq'),
(35, '2023-03-31', '16:25:00', 0, 31, 'hoda'),
(36, '2023-03-31', '22:20:00', 0, 31, 'a'),
(37, '2023-03-27', '09:09:00', 0, 0, 'h'),
(38, '2023-04-14', '21:45:00', 0, 0, 'qq'),
(39, '2023-04-14', '21:45:00', 0, 0, 'qq'),
(40, '2023-04-14', '21:45:00', 0, 0, 'qq'),
(41, '2023-03-30', '23:47:00', 0, 0, 'qq'),
(42, '0000-00-00', '00:00:00', 0, 0, ''),
(43, '2023-04-20', '22:01:00', 0, 0, 'gggggggg'),
(44, '2023-04-01', '22:18:00', 0, 0, 'ooooo'),
(45, '2023-04-02', '07:49:00', 0, 0, 'hello'),
(46, '2023-04-07', '19:04:00', 0, 0, 'hello'),
(47, '2023-04-29', '21:05:00', 0, 0, 'qq'),
(48, '2023-04-08', '18:14:00', 0, 0, 'hello'),
(49, '0000-00-00', '00:00:00', 0, 0, ''),
(50, '0000-00-00', '00:00:00', 0, 0, ''),
(51, '2023-04-19', '08:15:20', 1, 15, ''),
(52, '2023-04-29', '06:17:38', 1, 14, 'help please!!!!'),
(53, '2023-03-29', '22:31:00', 0, 0, 'hello'),
(54, '2023-03-29', '22:31:00', 0, 0, 'hello'),
(55, '2023-03-29', '22:31:00', 0, 0, 'hello'),
(56, '2023-04-16', '21:55:00', 0, 14, 'bonjour'),
(57, '2023-04-29', '09:09:00', 0, 14, 'help meee'),
(58, '2023-04-28', '10:59:00', 0, 9, 'صباح الخير'),
(59, '2023-04-19', '06:00:00', 0, 9, ''),
(60, '2023-04-10', '03:14:00', 0, 16, 'hi im jadidi'),
(61, '2023-05-05', '01:18:00', 0, 16, 'HI'),
(62, '2023-04-08', '03:12:00', 0, 14, ''),
(63, '2022-12-23', '08:08:00', 0, 18, 'help'),
(64, '2023-04-26', '10:08:00', 0, 18, 'hhhhhhh'),
(65, '2023-04-19', '14:47:00', 0, 19, 'qq');

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

DROP TABLE IF EXISTS `secretaire`;
CREATE TABLE IF NOT EXISTS `secretaire` (
  `num_secrt` int NOT NULL AUTO_INCREMENT,
  `nom_secrt` char(15) NOT NULL,
  `prenom_secrt` char(15) NOT NULL,
  `email_secrt` char(35) NOT NULL,
  `password_secrt` char(20) NOT NULL,
  PRIMARY KEY (`num_secrt`),
  UNIQUE KEY `email_secrt` (`email_secrt`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `secretaire`
--

INSERT INTO `secretaire` (`num_secrt`, `nom_secrt`, `prenom_secrt`, `email_secrt`, `password_secrt`) VALUES
(1, '', '', 'secretaire1@gmail.com', '202cb962ac59075b964b'),
(2, '', '', 'secretaire2@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `num_util` int NOT NULL AUTO_INCREMENT,
  `nom_util` char(15) NOT NULL,
  `prenom_util` char(15) NOT NULL,
  `tel_util` char(14) NOT NULL,
  `cin_util` char(10) NOT NULL,
  `email_util` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass_util` char(20) NOT NULL,
  PRIMARY KEY (`num_util`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`num_util`, `nom_util`, `prenom_util`, `tel_util`, `cin_util`, `email_util`, `pass_util`) VALUES
(1, 'hoda11222222222', 'boustany', '0775868686811', 'TA74746', 'hoda1@gmail.com', ''),
(15, 'fatna', 'azim', '060641543', '', 'fatna@gmail.com', '123'),
(18, 'ali12', 'ali', '0986678656', '', 'ali1@gmail.com', '12345'),
(4, 'AAAA', 'HHHHH', '88765678', 'TA747409', 'hajar@gmail.com', 'md5(4e4d6c332b6fe62a'),
(16, 'jadadi', 'moha', '000987654567U', '', 'moha@gmail.com', '222'),
(6, 'bous', 'hoda', '0965533273', 'TAE65525', 'hoda12@gmail.com', '8e11f1e6d8b86f2b8577'),
(7, 'bous', 'hoda', '0965533273', 'TAE65525', 'hoda12@gmail.com', 'hodahoda'),
(8, 'kakita', 'sara', '99999', 'TE4556', 'kakita@gmail.com', '7b78faf0cdcd37d2bf71'),
(9, 'sarahi', 'amina', '83748734839', 'Ta73645', 'sara@gmail.com', 'sara'),
(19, 'latifa', 'erradi', '07758686868', '', 'erradi@gmail.com', '1234'),
(11, 'erradi', 'latifa', '07847466', 'TA747409', 'latifa@gmail.com', 'latifa'),
(13, 'MAMA', 'hatim', '2222222', '', 'ali@gmail.com', '123'),
(17, 'samis', 'sami', '060675848', '', 'sami@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
