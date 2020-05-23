SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Data Base :  `Olympiades`
--

-- --------------------------------------------------------

--
-- TABLE `chat`
--
CREATE TABLE `chat` (
                        `id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `message` blob NOT NULL,
                        `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- TABLE `news`
--
CREATE TABLE `news` (
                        `id` int(11) NOT NULL,
                        `start` varchar(100) NOT NULL,
                        `end` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- INSERT TABLE `news`
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
-- TABLE `participants`
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
-- INSERT TABLE (ADMIN) `participants`
--
INSERT INTO `participants` (`id`, `name`, `f_name`, `mail`, `pseudo`, `password`, `phone`, `description`) VALUES
(1, 'Gourout', 'Le Grand', 'no_reply@olympiades.com', 'Olympiades', '$2y$10$Q7r1qxwqRrr856Ik6Ysu8.ahjQeGatfhkx.TsH5AMGAhXTGMXImZ.', '0000000000', 'Be all in, BE OLYMPIADES');

--
-- KEYS FOR `chat`
--
ALTER TABLE `chat`
    ADD PRIMARY KEY (`id`),
    ADD KEY `user_chat` (`user_id`);

--
-- KEY FOR `news`
--
ALTER TABLE `news`
    ADD PRIMARY KEY (`id`);

--
-- KEYS FOR `participants`
--
ALTER TABLE `participants`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `mail` (`mail`),
    ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT `news`
--
ALTER TABLE `news`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT `participants`
--
ALTER TABLE `participants`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- KEY FOR `chat`
--
ALTER TABLE `chat`
    ADD CONSTRAINT `user_chat` FOREIGN KEY (`user_id`) REFERENCES `participants` (`id`);
ALTER TABLE `chat`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
