-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 mai 2021 à 06:15
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_ann` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `titre_ann` varchar(250) NOT NULL,
  `desc_ann` varchar(250) NOT NULL,
  `pay` int(11) NOT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `ddl_ann` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_ann`, `id_user`, `titre_ann`, `desc_ann`, `pay`, `categorie`, `ddl_ann`) VALUES
(8, 19, 'Layout Artist', 'Design art copy layouts for material to be presented by visual communications media like books, magazines, newspapers, television, and packaging. Study illustrations photographs to plan presentation of material, product, or service.', 5000, 'Singing', '2021-05-25'),
(9, 20, 'Animated cartoon Artist', 'Draw animated cartoons for use in motion pictures or television. Render series of sequential drawings of characters or other subject material which when photographed projected at specific speed becomes animated.', 1200, 'Painting', '2021-05-21'),
(10, 18, 'Artists Representative', 'Manage affairs of entertainers by participating in negotiations with agents and others concerning contracts and business matters affecting clients interests, and advises clients on career development advancement. ', 5000, 'Theatre', '2021-05-25'),
(11, 20, 'Paste up Artist', 'Assemble typeset copy artwork into pasteup for printing reproduction. Measure and marks board according to Graphic Designer profess. & kin. 141.061-018 or artists layout to indicate position of artwork, typeset copy, page edges, folds and colors...', 1200, 'Painting', '2021-05-31'),
(12, 19, 'Multimedia Artist And Animator', 'Create two-dimensional three-dimensional images depicting objects in motion or illustrating a process, using computer animation or modeling programs. Assemble, typeset, scan and produce digital camera-ready art or film negatives printers proofs.', 4200, 'Manga', '2021-05-29'),
(13, 25, 'Artist Mannequin Coloring', 'Apply paint or lacquer to papier mache mannequin to simulate parts of body articles of clothing. Sets mannequin on revolving table in spraybooth. Mask parts preparatory to spraying, using gummed paper.', 3450, 'Painting', '2021-07-23');

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ann_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `categorie_name` varchar(255) NOT NULL,
  `categorie_image` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_name`, `categorie_image`, `status`) VALUES
('Cinema', '(4).png', '+'),
('Manga', '(5).png', '+'),
('Painting', '(6).png', '+'),
('Photography', '(1).png', '+'),
('Singing', '(2).png', '+'),
('Theatre', '(3).png', '+');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(100) NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `comment` varchar(100) NOT NULL,
  `comment_analys` varchar(255) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `comment_event`
--

CREATE TABLE `comment_event` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `commentDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment_event`
--

INSERT INTO `comment_event` (`id`, `id_user`, `id_event`, `content`, `commentDate`) VALUES
(32, 18, 126, 'Great event !', '2021-04-27'),
(33, 18, 127, 'schtonks', '2021-05-19');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210409150002', '2021-04-09 17:00:15', 37608),
('DoctrineMigrations\\Version20210409164028', '2021-04-09 18:40:39', 14560),
('DoctrineMigrations\\Version20210410100256', '2021-04-10 12:03:16', 1195);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(255) NOT NULL,
  `id_org` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `nom_event` varchar(255) NOT NULL,
  `type_event` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `capacite_event` int(11) NOT NULL,
  `nb_max` int(11) NOT NULL,
  `image_event` varchar(255) NOT NULL,
  `location_event` varchar(255) DEFAULT NULL,
  `rating_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `id_org`, `date`, `nom_event`, `type_event`, `categorie`, `description`, `capacite_event`, `nb_max`, `image_event`, `location_event`, `rating_event`) VALUES
(126, 18, '2020-01-01', 'testingFieldss', 'Festival', 'Singing', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 19, 20, '1 (8).jpg', 'Sun', 3),
(127, 18, '2020-01-01', 'TryingShow', 'Festival', 'Manga', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (9).png', 'Jupiter', 4),
(129, 19, '2020-01-01', 'Alphabetical', 'Festival', 'Photography', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 19, 20, '1 (10).jpg', 'Mars', 2),
(130, 19, '2021-05-21', 'ThisMonth', 'Festival', 'Singing', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 14, 20, '1 (10).png', 'Pluto', 0),
(131, 18, '2021-05-21', 'Fete de la musique', 'Festival', 'Cinema', 'testingTriWhat is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 17, 20, '1 (11).png', 'Neptune', 0),
(132, 19, '2021-05-21', 'Red Wedding', 'Festival', 'Singing', 'SearchMeeWhat is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (13).jpg', 'Uranus', 0),
(133, 18, '2021-05-28', 'BundleCalendar', 'Festival', 'Manga', 'BundleCalendarWhat is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, 'githob.jpg', 'There', 0),
(134, 18, '2021-05-28', 'Leggo', 'Festival', 'Theatre', 'BundleCalendarWhat is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (21).jpg', 'Here', 0),
(135, 18, '2021-05-28', 'NotToday', 'Festival', 'Theatre', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (20).jpg', 'Mercury', 0),
(136, 18, '2021-05-28', 'Today', 'Festival', 'Cinema', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (9).jpg', 'Saturn', 0),
(137, 18, '2021-05-28', 'WhatIf', 'Festival', 'Singing', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (18).jpg', 'Uranus', 0),
(138, 18, '2021-05-28', 'ProjectX', 'Festival', 'Painting', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (11).jpg', 'Ligma', 0),
(139, 18, '2021-07-28', 'TryingSearch', 'Festival', 'Singing', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (9).png', 'Sun', 0),
(150, 18, '2021-07-28', 'Beth Hart', 'Festival', 'Theatre', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (12).jpg', 'Neptune', 0),
(151, 18, '2021-07-28', 'Yamli', 'Festival', 'Singing', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (18).jpg', 'Pluto', 0),
(152, 18, '2021-07-28', 'Bojack Horseman', 'Festival', 'Photography', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (11).jpg', 'Venus', 0),
(153, 18, '2020-01-01', 'Yours', 'Festival', 'Cinema', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (14).jpg', 'Earth', 2),
(154, 18, '2020-01-01', 'Festival Jazz', 'Festival', 'Painting', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (12).png', 'Mars', 1),
(155, 18, '2020-01-01', 'Yuma in Carthage', 'Festival', 'Manga', 'What is an event description? An event description is copy that aims to tell your potential attendees what will be happening at the event, who will be speaking, and what they will get out of attending. ', 20, 20, '1 (5).jpg', 'Jupiter', 4);

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(30) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `contenu_feedback` varchar(255) NOT NULL,
  `type_feedback` varchar(30) NOT NULL,
  `etat_feedback` varchar(30) NOT NULL,
  `date_feedback` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `interactions`
--

CREATE TABLE `interactions` (
  `id_inter` int(20) NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `like_check` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `label`
--

CREATE TABLE `label` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `imageLabel` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `label`
--

INSERT INTO `label` (`id`, `name`, `type`, `imageLabel`) VALUES
(3, 'Partner', 'qsd', 'C:\\xampp\\php\\www\\ArtBox-CrashTest\\src\\ArtHub\\images\\users\\kaisicona-partnership.png');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id_part` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `rib` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id_part`, `nom`, `adresse`, `logo`, `rib`, `tel`, `status`, `id_user`) VALUES
(1, 'Sodexo', 'whatever', 'C:/xampp/php/www/ArtBox-CrashTest-WEB/public/imagepartenaire/partner.jpg', '15695213', '5447264', '1', 19),
(3, 'Ooredoo', 'Al Ghazela', 'ooredoo.png', '123456789', '22097400', 'Approved', 18);

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_participation` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `ticket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id_participation`, `id_user`, `id_event`, `ticket`) VALUES
(293, 18, 126, '12618');

-- --------------------------------------------------------

--
-- Structure de la table `postes`
--

CREATE TABLE `postes` (
  `id_post` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Nom_post` varchar(30) NOT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `album_cover` varchar(255) DEFAULT NULL,
  `Likes` int(11) NOT NULL,
  `desc_analys` varchar(30) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `post_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postes`
--

INSERT INTO `postes` (`id_post`, `Description`, `Nom_post`, `categorie`, `file`, `post_date`, `album_cover`, `Likes`, `desc_analys`, `id_user`, `post_type`) VALUES
(10, 'I love this song', 'Sunflower', 'Photography', '69e5cb05545e9fa534f525d9162750a0.jpg', '2021-05-20 02:32:22', '69e5cb05545e9fa534f525d9162750a0.jpg', 0, '{\"neg => \":0,\"new =>  \":0.323,', 20, 'music'),
(11, 'adventure', 'go pro', 'Photography', '622e4fef69eecef6bc018f11e852a132.jpg', '2021-05-20 02:32:09', '622e4fef69eecef6bc018f11e852a132.jpg', 0, '{\"neg => \":0,\"new =>  \":0,\"pos', 19, 'cinema');

-- --------------------------------------------------------

--
-- Structure de la table `rating_event`
--

CREATE TABLE `rating_event` (
  `id_rating` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rating_event`
--

INSERT INTO `rating_event` (`id_rating`, `id_user`, `id_event`, `rating`) VALUES
(78, 19, 126, 5),
(86, 21, 126, 1),
(87, 20, 126, 3),
(91, 18, 126, 5),
(93, 18, 127, 4);

-- --------------------------------------------------------

--
-- Structure de la table `signalisation`
--

CREATE TABLE `signalisation` (
  `id_signal` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `contenu_signal` varchar(255) NOT NULL,
  `type_signal` varchar(30) NOT NULL,
  `etat_signal` varchar(30) NOT NULL,
  `date_signal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type_event`
--

CREATE TABLE `type_event` (
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_event`
--

INSERT INTO `type_event` (`type_name`) VALUES
('Festival'),
('Online'),
('Other');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `ref_admin` varchar(1) NOT NULL,
  `id_label` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `isVerified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `username`, `mail`, `date_naissance`, `pwd_user`, `ref_admin`, `id_label`, `image`, `roles`, `isVerified`) VALUES
(18, 'kais', 'lamine', 'kais', 'kais.lamine@esprit.tn', '1999-03-04', '$2y$13$gItPuStGq.ndXUaxDeC5YevW7KSyux7zljJrEkv64rp7/Z8qqGVbi', '+', 3, 'C:\\xampp\\php\\www\\ArtBox-CrashTest\\src\\ArtHub\\images\\users\\kaisicona-partnership.png', '[]', 0),
(19, 'louay', 'louay', 'louay', 'louay.jeddou@esprit.tn', '2016-01-01', '0000', '-', 3, 'C:\\xampp\\php\\www\\ArtBox-CrashTest\\src\\ArtHub\\images\\users\\kaisicona-partnership.png', '[]', 0),
(20, 'yasmine', 'zerai', 'yasmine', 'yasmine.zerai@esprit.tn', '1999-03-04', '0000', '+', 3, 'C:\\xampp\\php\\www\\ArtBox-CrashTest\\src\\ArtHub\\images\\users\\kaisicona-partnership.pngC:\\xampp\\php\\www\\ArtBox-CrashTest\\src\\ArtHub\\images\\users\\kaisicona-partnership.png', '[]', 0),
(21, 'moetez', 'karoui', 'moetez', 'moetez.karoui@esprit.tn', '1999-03-04', '$2y$13$gItPuStGq.ndXUaxDeC5YevW7KSyux7zljJrEkv64rp7/Z8qqGVbi', '-', 3, 'C:\\xampp\\php\\www\\ArtBox-CrashTest\\src\\ArtHub\\images\\users\\kaisicona-partnership.png', '[]', 0),
(25, 'Crash', 'Test', 'CrashTest1', 'louay.jeddou@esprit.tn', '1901-01-01', '$2y$13$gItPuStGq.ndXUaxDeC5YevW7KSyux7zljJrEkv64rp7/Z8qqGVbi', '+', 3, 'C:\\xampp\\tmp\\php304D.tmp', '[]', 0),
(26, 'mohamad', 'Salah', 'koffar', 'louay.jeddou@esprit.tn', '1901-01-01', '$2y$13$gItPuStGq.ndXUaxDeC5YevW7KSyux7zljJrEkv64rp7/Z8qqGVbi', '+', 3, 'C:\\xampp\\tmp\\php2329.tmp', '[]', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_ann`),
  ADD KEY `fk_userrrrr` (`id_user`),
  ADD KEY `cattt` (`categorie`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userrrr` (`user_id`),
  ADD KEY `fk_annnnn` (`ann_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categorie_name`),
  ADD UNIQUE KEY `categorie_name` (`categorie_name`);
ALTER TABLE `categorie` ADD FULLTEXT KEY `categorie_name_2` (`categorie_name`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post2` (`id_post`),
  ADD KEY `id_use2` (`id_user`);

--
-- Index pour la table `comment_event`
--
ALTER TABLE `comment_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userr` (`id_user`),
  ADD KEY `eventt` (`id_event`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom_event` (`nom_event`),
  ADD KEY `id_org` (`id_org`),
  ADD KEY `categorie` (`categorie`),
  ADD KEY `ssss` (`type_event`);
ALTER TABLE `evenement` ADD FULLTEXT KEY `nom_event_2` (`nom_event`,`description`);
ALTER TABLE `evenement` ADD FULLTEXT KEY `categorie_2` (`categorie`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `fk_usee` (`id_user`);

--
-- Index pour la table `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`id_inter`),
  ADD KEY `fk_uppppp` (`id_post`),
  ADD KEY `fk_ussssss` (`id_user`);

--
-- Index pour la table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id_part`),
  ADD KEY `fk_useerr` (`id_user`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_participation`),
  ADD KEY `fk_userid` (`id_user`),
  ADD KEY `fk_idevt` (`id_event`);

--
-- Index pour la table `postes`
--
ALTER TABLE `postes`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `ctn1` (`id_user`),
  ADD KEY `dsqd` (`categorie`);

--
-- Index pour la table `rating_event`
--
ALTER TABLE `rating_event`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `fk_event` (`id_event`),
  ADD KEY `fk_user` (`id_user`);

--
-- Index pour la table `signalisation`
--
ALTER TABLE `signalisation`
  ADD PRIMARY KEY (`id_signal`),
  ADD KEY `fkkk` (`id_post`),
  ADD KEY `fuuaz` (`id_user`);

--
-- Index pour la table `type_event`
--
ALTER TABLE `type_event`
  ADD PRIMARY KEY (`type_name`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_ann` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comment_event`
--
ALTER TABLE `comment_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `interactions`
--
ALTER TABLE `interactions`
  MODIFY `id_inter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT pour la table `label`
--
ALTER TABLE `label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_participation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT pour la table `postes`
--
ALTER TABLE `postes`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `rating_event`
--
ALTER TABLE `rating_event`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `signalisation`
--
ALTER TABLE `signalisation`
  MODIFY `id_signal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_F65593E5497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`categorie_name`),
  ADD CONSTRAINT `fk_userrrrr` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `FK_E33BD3B816912862` FOREIGN KEY (`ann_id`) REFERENCES `annonce` (`id_ann`),
  ADD CONSTRAINT `FK_E33BD3B8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_5F9E962AD1AA708F` FOREIGN KEY (`id_post`) REFERENCES `postes` (`id_post`);

--
-- Contraintes pour la table `comment_event`
--
ALTER TABLE `comment_event`
  ADD CONSTRAINT `FK_923492566B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_92349256D52B4B97` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_B26681E497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`categorie_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_B26681EECB152DA` FOREIGN KEY (`id_org`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evenement_ibfk_2` FOREIGN KEY (`type_event`) REFERENCES `type_event` (`type_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_usee` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `interactions`
--
ALTER TABLE `interactions`
  ADD CONSTRAINT `FK_538B74BD6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_538B74BDD1AA708F` FOREIGN KEY (`id_post`) REFERENCES `postes` (`id_post`);

--
-- Contraintes pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD CONSTRAINT `FK_32FFA3736B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `fk_idevt` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `postes`
--
ALTER TABLE `postes`
  ADD CONSTRAINT `FK_5A763C64497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`categorie_name`),
  ADD CONSTRAINT `FK_5A763C646B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `rating_event`
--
ALTER TABLE `rating_event`
  ADD CONSTRAINT `fk_event` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `signalisation`
--
ALTER TABLE `signalisation`
  ADD CONSTRAINT `FK_1BD243CD6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_1BD243CDD1AA708F` FOREIGN KEY (`id_post`) REFERENCES `postes` (`id_post`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
