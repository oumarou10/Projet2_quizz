-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mer 12 Avril 2017 à 14:06
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `reponse_id` int(11) NOT NULL,
  `reponse` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `questions_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `reponses`
--

INSERT INTO `reponses` (`reponse_id`, `reponse`, `type`, `questions_id`) VALUES
(1, 'Venise', 0, 1),
(2, 'Florence', 1, 1),
(3, 'New-York', 1, 2),
(4, 'Boston', 0, 2),
(5, 'Colia', 0, 3),
(6, 'Yamoussoukro', 1, 3),
(7, 'botte', 1, 10),
(8, 'ciseaux', 0, 10),
(11, 'Bamako', 1, 11),
(12, 'Moscou', 0, 11),
(13, '50', 0, 13),
(14, '24', 1, 13),
(15, 'Chelsea', 0, 14),
(16, 'Arsenal', 1, 14),
(17, 'Ramires', 0, 17),
(18, 'Lionel Messi', 1, 17),
(19, 'Roumanie/Suisse/Albanie', 1, 18),
(20, 'Brésil/Argentine/Suède', 0, 18),
(21, '2006', 1, 19),
(22, '1998', 0, 19),
(29, 'Chelsea FC', 1, 21),
(30, 'Ajax Amsterdam', 0, 21),
(31, '2000', 0, 24),
(32, '1993', 1, 24),
(33, '10', 1, 25),
(34, '15', 0, 25),
(35, 'Lucho Gonzalez', 1, 26),
(36, 'Lisandro Lopez', 0, 26),
(37, 'Mamadou Niang', 0, 27),
(38, 'Mathieu Valbuena', 1, 27),
(39, 'Brandao', 0, 28),
(40, 'Didier Drogba', 1, 28),
(41, 'Tobi', 1, 29),
(42, 'Shishui', 0, 29),
(43, 'Fugaku', 0, 29),
(44, 'Itachi', 1, 29),
(45, 'Madara', 1, 30),
(46, 'Neji', 0, 30),
(47, 'Ino', 0, 30),
(48, 'Mode Senin', 1, 31),
(49, 'Super Guérier', 0, 31),
(50, 'Mode loss', 0, 31),
(55, 'Kiri', 1, 32),
(56, 'Namek', 0, 32),
(57, 'Suna', 1, 32),
(58, 'Bikini bottom', 0, 32),
(59, 'Orochimaru', 0, 33),
(60, 'Tsunade', 0, 33),
(61, 'Jiraya', 1, 33),
(66, '3', 0, 34),
(67, '7', 1, 34),
(68, '16', 0, 34),
(69, '20', 0, 34),
(70, 'Chaozu', 0, 35),
(71, 'Sangoten', 1, 35),
(72, 'Krillin', 0, 35),
(73, 'Trunk', 1, 35),
(74, 'Chichi', 1, 36),
(75, 'Bulma', 0, 36),
(76, 'Buu', 0, 37),
(77, 'Freezer', 0, 37),
(78, 'Cell', 1, 37),
(79, 'C-17 & C-18', 1, 37),
(80, 'Radditz', 0, 38),
(81, 'Dende', 1, 38),
(82, 'Picollo', 1, 38),
(83, 'Hercule', 1, 38);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`reponse_id`),
  ADD UNIQUE KEY `index_uni_reponse` (`reponse`),
  ADD KEY `questions_id` (`questions_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `reponse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`question_id`);
