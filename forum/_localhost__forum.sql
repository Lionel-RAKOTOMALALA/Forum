--
-- Base de données : `forum`
--
CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `forum`;

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `id_auteur`, `pseudo_auteur`, `id_question`, `contenu`) VALUES
(1, 1, 'Lio', 23, 'à Tuléar'),
(2, 1, 'Lio', 24, 'j&#039;ai 21 ans'),
(3, 1, 'Lio', 33, 'masaky'),
(4, 1, 'Lio', 34, 'bakeo kwh e'),
(5, 1, 'Lio', 34, 'ok'),
(6, 1, 'Lio', 34, 'ok'),
(7, 1, 'Lio', 34, 'test'),
(8, 18, 'bobonaky', 34, 'test 1 2'),
(9, 18, 'bobonaky', 33, 'test'),
(10, 18, 'bobonaky', 33, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `bin` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_mess` int(11) NOT NULL AUTO_INCREMENT,
  `mess` text NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  PRIMARY KEY (`id_mess`)
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_mess`, `mess`, `id_destinataire`, `id_auteur`) VALUES
(144, 'kkr', 20, 19),
(143, 'kkr', 20, 19),
(142, 'kkr ty', 20, 19),
(141, 'kkr ty', 1, 18),
(140, 'kkr', 18, 1),
(139, 'mp tse kwh<br />\r\n', 18, 1),
(121, 'KKR', 18, 1),
(122, 'KKR', 18, 1),
(123, 'KKR', 18, 1),
(124, 'KKR', 18, 1),
(125, 'KKR', 18, 1),
(126, 'KKR', 18, 1),
(127, 'KKR', 18, 1),
(128, 'KKR', 18, 1),
(129, 'KKR', 18, 1),
(130, 'KKR', 18, 1),
(131, 'KKR', 18, 1),
(132, 'lio', 18, 1),
(133, 'lio', 18, 1),
(134, 'kkr', 18, 1),
(135, 'kkr', 1, 18),
(136, 'masaky', 1, 18),
(137, 'masakeeee', 1, 18),
(138, 'kkr', 18, 1);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `date_publication` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `titre`, `description`, `contenu`, `id_auteur`, `pseudo_auteur`, `date_publication`) VALUES
(22, 'Inquiétude', 'Demander si ça va', 'Bonjour<br />\r\nEst ce que vous allez bien?', 1, 'Lio', '01/10/2022  à 20:18'),
(23, 'Renseignement', 'Demander la domicile des membres', 'Bonjour<br />\r\nOù est ce que vous habitez?', 1, 'Lio', '01/10/2022  à 20:20'),
(24, 'Renseignement', 'Demander l&#039;âge des membres', 'Bonjour à tous<br />\r\nVous avez quel âge?', 12, 'Nel', '01/10/2022  à 20:21'),
(25, 'Salutation', 'saluer', 'Bonjour tout le monde<br />\r\ntous se passe bien ici?', 12, 'Nel', '01/10/2022  à 20:22'),
(29, 'hadontoa io kwh man', 'donto io man', 'iha va donto?', 13, 'Donto', '02/10/2022  à 08:29'),
(31, 'demo', 'demo', 'exam demo???', 15, 'zanadiona', '06/10/2022  à 11:22'),
(32, 'Ah engao any tse zao kwheeeeeee', 'noho iny ', 'php avao henanio?', 16, 'hahaha', '06/10/2022  à 15:14'),
(33, 'Rentré', 'date', 'ombia rentré?', 1, 'Lio', '17/10/2022  à 08:03'),
(34, 'fa haly', 'folia', '@ firy iha moly?', 18, 'bobonaky', '17/11/2022  à 16:34');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `mdp`) VALUES
(1, 'Lio', 'Tolotriniaina Lionel', 'RAKOTOMALALA', '$2y$10$tPIsu7Z4BojWG3Qt0PDgYewCWnlXmQwFjc7fM.wwEUgzymuhApoWq'),
(2, 'Fab', 'RAKOTOMALALA ', 'Fabrice Bruel', '$2y$10$JHR4mOTLw5a01gBm5V40ZOJp2nNXDeN3v1UbevNXIsURiNRU3WLi2'),
(3, 'Li', 'Rak', 'Lio', '$2y$10$nPckgVYe.skV5yYoYKCQaOPhrShKthSX13re4lgBIsHIvrwhkXfea'),
(4, 'Joh', 'Joh', 'La Banane', '$2y$10$j4V7OwJSx290XOvuFsgxWetWHb3rv/RtIUpGoSo8XgUznpoqftv.u'),
(5, 'Admin', 'Admin', 'Admin', '$2y$10$Dp4LZ9QpkQmQt9atMuNf4OJtOBQq4.8/NKiEuSNndDsp74mvVO.0S'),
(6, 'k', 'k', 'm', '$2y$10$PvCvxhs32rNnnuAlzdQEsODIgH9VqKUv0r6JTEHgnnzN.3hGvWcZ2'),
(7, 'ayna', 'clarinette', 'juliette', '$2y$10$rqrsooGzDJX5hQhKj8XWLOxbEI7xGsYnN1MI4FHkQZxpsidiVmVAe'),
(8, 'LionelArk', 'Lionel', 'Ark', '$2y$10$7BNVe6OloR4H5dIjU3/eb.C0ATVWLreW4Lb0cGyT0OmWU63qTpeg2'),
(9, 'Aona', 'SaSa', 'Baba', '$2y$10$PD964D2Nff9Y32rtU4d6yelabOPSEliw/kVJLuY/rDDxN3FoJH7Fm'),
(10, 'sambatra', 'Sambatra', 'Claudia', '$2y$10$LMQAkQh.VFlk815X.HhCJedP0cTVmHkPmLtlSpzMWMax0b55LNJRG'),
(11, 'Lili', 'Lili', 'Lili', '$2y$10$.9cNOvONxLzAVBrlKpEb4.kVCwrIR2hzaJLGdJo3NDM6HhZEvVIDy'),
(12, 'Nel', 'Nel', 'Nel', '$2y$10$Aj1ktegjs8Cz/SHZ1IARGewf1l3VWHj7uKra5Aq3iMw/8faJRrL9S'),
(13, 'Donto', 'Hadontoa', 'dontomind', '$2y$10$bCiaAd5IAKC44ADrXEdyRur6/RCd0jR8YfbZKVZYLuV3EpEigp0fG'),
(14, 'tallman', 'RA', 'Albert', '$2y$10$X944nsFajDTTTLXZT19O0.e.crzVYahh1W40mlmJftw.i.RuXuJ.2'),
(15, 'zanadiona', 'SOAVENORO', 'Chéria', '$2y$10$9KxfqeqzTnZp.18hPu5VPOfyKDs.G1XSEWdVQMjoUI0PDfvjYIUYG'),
(16, 'hahaha', 'Manjatiana', 'Safica Florida', '$2y$10$HpaejpwqVwynh85dkcmXRum5KN49bIefHkskwS8Gbj3nmYw1ik5Oi'),
(17, 'Nere', 'Nere', 'Pory', '$2y$10$Z9BBZOAkphFbr/lzasPTOefvWRJuo/GMkeiTv3nZssqB5DKBfJq5i'),
(18, 'bobonaky', 'Kennedy', 'Rog', '$2y$10$keVPrVQwyjjica0SRxtTHOUA7D1PE1YcU8mILCsJvBoUcInUDUHPq'),
(19, 'hadontoa', 'Mihangy', 'Pierrot', '$2y$10$q08szv7QWP3gj71i2oxfB.0jhHhxxri3xPxgLq1j3pNJBfZs0/79m'),
(20, 'Aina', 'Aina', 'Mercia', '$2y$10$4dF.wraGoVizQoRYoVRXh.W.BxsEy2uY6NCo5KXlyg277.7Yy/Mz.');
