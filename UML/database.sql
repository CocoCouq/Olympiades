-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 20 mai 2020 à 07:07
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Olympiades`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `user_id`, `message`, `send_date`) VALUES
(1, 24, 'Bonjour à tous, ceci est le premier message', '2020-05-19 12:17:29'),
(2, 25, 'Ok, super', '2020-05-19 12:17:55'),
(3, 25, 'Ton message est vraiment null', '2020-05-19 12:18:23'),
(10, 26, 'Bonjoura tous', '2020-05-19 13:30:24');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `start`, `end`) VALUES
(1, 'Les requins fuient, voila ', ', chasseur de thons'),
(2, 'Le pangolin aurait été contaminé par ', ', sortez les masques'),
(3, 'La femme de ', ' a appelée, elle attendrait un enfant'),
(4, 'Il dénonce Michael Jackson, ', ' aurait été abusé à l\'age de 20ans'),
(5, 'Drucker recevra ', ' pour son dernier film \"Touches toi le front, t\'auras des boutons\"'),
(6, 'Nouveau salon tantrique, ', ' parle de l\'aboutissement d\'une vie'),
(7, 'Le dernier opus de ', ' est enfin disponible. Réservez \"Apollo, la conquête de la Fume\"'),
(8, 'URGENT : \"Je vous emmerde tous\", ', ' au rendez-vous des alcooliques anonymes'),
(9, 'Interviews de ', ' sur son coming out à 18:00');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `password` blob NOT NULL,
  `phone` char(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`id`, `name`, `f_name`, `mail`, `pseudo`, `password`, `phone`, `description`) VALUES
(24, 'Potter', 'Harry', 'sss.fff@ccc.ccc', 'Dude', 0x243279243130244633536c6c4a6f414b4a3150387a6662576a6d714a75707836414530625451537734615a743766767151783272724763453034614b, '0678787878', 'Jamais le premier soir'),
(25, 'Richard', 'Ryan', 'email@mail.com', 'Solitad', 0x243279243130246342544232482f704e5172346167557865734c2f454f745751553761466246565278695872347036384a4b71495374523533626c75, '0619283746', '2 x toi = moi'),
(26, 'Couq', 'Corentin', 'couq@icloud.com', 'Le Trouble', 0x2432792431302471655969766d56496b6a4b36776867475a31676852753934316d7732442f6a33663478464e50446f564351616a765247507a474665, '0710284637', 'Derrière ma femme, il y a un homme'),
(27, 'Lafont', 'Patrice', 'lafont.@ref.com', 'La Fondue', 0x24327924313024597376473372793438342e434b7a7170387132772e6539664d615856594d31766b5751393348307841696b375047745a59315a5653, '0654545467', 'N&#39;a plus peur du noir');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_chat` (`user_id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `user_chat` FOREIGN KEY (`user_id`) REFERENCES `participants` (`id`);
