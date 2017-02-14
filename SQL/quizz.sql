-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 14, 2017 at 07:52 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(50) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_bin NOT NULL,
  `quizz_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `quizz_id`) VALUES
(1, 'Dans quelle ville italienne se trouve la tour Pirelli ?', 1),
(2, 'Dans quelle ville se trouve la Statue de la Liberté ?', 1),
(3, 'Dans quelle ville en Côte d\'ivoire se trouve la grande Basilique ?\n', 1),
(10, 'Quelle est la forme de l’Italie ?', 1),
(11, 'Quelle est la capitale du Mali ?', 1),
(12, 'Dans quelle ville se trouve la Tour Eiffel ?', 1),
(13, 'Combien d’équipes seront présentes lors de l’Euro 2016 de foot ?', 2),
(14, 'Quel club de foot anglais joue dans l’enceinte de l’Emirates Stadium\n', 2),
(17, 'Quel footballeur est surnommé la Puce ?', 2),
(18, 'Quelles sont les 3 équipes figurant dans le groupe de la France pour l’Euro 2016 de foot?', 2),
(19, 'En quelle année Zinédine Zidane a-t-il pris sa retraite en tant que joueur ?', 2),
(21, 'Quelle équipe a éliminé le PSG en quarts de finale de la Ligue des Champions 2016\r\n?', 2),
(24, 'En quelle année les Marseillais ont-ils gagné leur dernière Ligue des Champions ?', 3),
(25, 'Combien de coupes de France a remporté l’OM ?', 3),
(26, 'Cette saison (2009-2010), quel joueur est arrivé à Marseille en provenance du FC Porto ?', 3),
(27, 'Quel joueur marseillais porte cette saison, 2009-2010, le numéro 28 ?', 3),
(28, 'Pour quel joueur, les supporters olympiens ont-ils organisé une grande collecte de fonds pour le faire revenir au club ?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quizz`
--

CREATE TABLE `quizz` (
  `id` int(11) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `quizz`
--

INSERT INTO `quizz` (`id`, `titre`) VALUES
(1, 'Quizz Géographie'),
(2, 'Quizz Football Euro Sport 2016'),
(3, 'Quizz Olympique de Marseille');

-- --------------------------------------------------------

--
-- Table structure for table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) UNSIGNED NOT NULL,
  `reponse` text COLLATE utf8_bin NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `questions_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reponses`
--

INSERT INTO `reponses` (`id`, `reponse`, `type`, `questions_id`) VALUES
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
(23, 'Fc Barcelone', 0, 20),
(24, 'Real Madrid', 1, 20),
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
(40, 'Didier Drogba', 1, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index_uni_question` (`question`(255)),
  ADD KEY `fk_quizz_id` (`quizz_id`);

--
-- Indexes for table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index_uni_reponse` (`reponse`(255));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_quizz_id` FOREIGN KEY (`quizz_id`) REFERENCES `quizz` (`id`);
