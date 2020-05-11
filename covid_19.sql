-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 10 Mai 2020 à 23:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `covid_19`
--

-- --------------------------------------------------------

--
-- Structure de la table `intercation`
--

CREATE TABLE IF NOT EXISTS `intercation` (
  `id_int` int(5) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(80) CHARACTER SET utf8 NOT NULL,
  `compte` text NOT NULL,
  `date` date NOT NULL,
  `user` int(3) NOT NULL,
  `reg` int(2) NOT NULL,
  PRIMARY KEY (`id_int`),
  KEY `user` (`user`),
  KEY `user_2` (`user`),
  KEY `user_3` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `intercation`
--

INSERT INTO `intercation` (`id_int`, `sujet`, `compte`, `date`, `user`, `reg`) VALUES
(1, 'Covid19', 'wjiet rassii', '2020-05-10', 20, 4),
(5, 'grippe', 'Kifeh nomrdho bel grippe ?', '2020-05-10', 22, 3),
(9, 'Covid19', 'quelle est la tempÃ©rature maximale ?', '2020-05-09', 5, 4),
(10, 'Covid19', 'je tausse toujours , estce que cest le covid19?', '2020-05-10', 5, 3),
(11, 'Covid19', 'je tausse toujours , estce que cest le covid19?', '2020-05-10', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id_med` int(4) NOT NULL AUTO_INCREMENT,
  `Np_med` varchar(20) NOT NULL,
  `Adr` text NOT NULL,
  `reg` varchar(20) NOT NULL,
  `Ntel_m` varchar(8) NOT NULL,
  `sexe_m` enum('H','F') NOT NULL,
  `spec` varchar(20) NOT NULL,
  `poste` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp_med` varchar(10) NOT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`id_med`, `Np_med`, `Adr`, `reg`, `Ntel_m`, `sexe_m`, `spec`, `poste`, `email`, `mdp_med`) VALUES
(10, 'sanaklfjl', '6 citÃ© lisken 3 , ben arous', '9', '58729633', 'F', 'generale', '2', 'sana@gmail.com', '$2y$10$pMf'),
(11, 'chahed Ons', '6 citÃ© lisken 3 , ben arous', '3', '58729633', 'F', 'generale', '1', 'chahedons1@gmail.com', '$2y$10$lJs'),
(12, 'ali ahmd', '12536s', '11', '1524639', 'H', '', '', 'ali@gmail.com', '$2y$10$lrp'),
(13, 'imen lol', '1525', '13', '78945612', 'F', 'kl,lfv,fldvl', '1', 'imen@gmail.com', '$2y$10$BJs'),
(16, 'samar', 'ik', '14', '1524639', 'F', 'generale', '1', 'samar@gmail.com', '$2y$10$EeA'),
(17, 'ryhem', 'chahedkjkcjs', '8', '1524639', 'F', 'kl,lfv,fldvl', '1', 'ryhem@gmail.com', '$2y$10$uCA'),
(18, 'marwa', 'chahed', '3', '12345678', 'F', 'neurologue', '2', 'marwa@gmail.com', '$2y$10$fVi'),
(19, 'chahed Ons', '6 citÃ© lisken 3 , ben arous', '5', '58729366', 'F', 'cardio', '1', 'ons@gmail.com', '$2y$10$CSc'),
(20, 'ahmed', 'soussa 6', '9', '12345678', 'H', 'neurologue', '1', 'ahmed@gmail.com', '$2y$10$dOG'),
(21, 'moez', 'dgjgjc', '9', '58729633', 'H', 'neurologue', '1', 'momo@gmail.com', '$2y$10$P79'),
(22, 'ridha chahed ', '6 citÃ© lisken 3 , ben arous', '3', '78945612', 'H', 'generale', '1', 'ridha@gmail.com', '$2y$10$0NR');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id_pat` int(4) NOT NULL AUTO_INCREMENT,
  `Np_pat` varchar(20) NOT NULL,
  `Adr_pat` text NOT NULL,
  `Reg_pat` varchar(20) NOT NULL,
  `Ntel_p` varchar(8) NOT NULL,
  `Age` int(3) NOT NULL,
  `sexe_p` enum('H','F') NOT NULL,
  `Email_pat` varchar(50) NOT NULL,
  `Mdp_pat` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id_pat`, `Np_pat`, `Adr_pat`, `Reg_pat`, `Ntel_p`, `Age`, `sexe_p`, `Email_pat`, `Mdp_pat`) VALUES
(22, 'Ben Ammar Mohamed Am', '6 citÃ© lisken 2 ben raous', '3', '58729633', 20, 'H', 'amine@gmail.com', '$2y$10$ofR'),
(23, 'moslem ganoun', 'rades', '3', '1524639', 20, 'H', 'moslem@gmail.com', '$2y$10$Gh5'),
(24, 'eya', 'jdje', '3', '1524639', 20, 'F', 'eya@gmail.com', '$2y$10$We0'),
(25, 'omar', 'hamemlinf', '3', '1524639', 20, 'H', 'omar@gmail.om', '$2y$10$zff'),
(26, 'Rami frija ', 'mourouj 3', '3', '55969303', 21, 'H', 'rami@gmail.com', '$2y$10$Ats'),
(27, 'malika', '', '4', '14253678', 55, 'F', 'malika@gmail.com', '$2y$10$/TO'),
(28, 'ali', 'soussa', '9', 'kjndcnck', 21, 'H', 'ali2@gmail.com', '$2y$10$IVN'),
(29, 'mohamed', 'benarous', '3', '1524639', 27, 'H', 'mohamed@gmail.com', '$2y$10$RYH');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE IF NOT EXISTS `reponse` (
  `id_rep` int(5) NOT NULL AUTO_INCREMENT,
  `sujet_rep` varchar(50) NOT NULL,
  `rep` text NOT NULL,
  `date_rep` date NOT NULL,
  `user_rep` int(4) NOT NULL,
  `reg_rep` int(2) NOT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `user_rep` (`user_rep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id_rep`, `sujet_rep`, `rep`, `date_rep`, `user_rep`, `reg_rep`) VALUES
(1, '', 'Oui peut etre!', '2020-05-13', 7, 3),
(2, '', 'le covid 19 est La maladie Ã  coronavirus 2019 (COVID-19) est une â€Žmaladie infectieuse due Ã  un coronavirus dÃ©couvert â€ŽrÃ©cemment. â€Ž\r\nLa majoritÃ© des personnes atteintes de la COVID-19 â€Žne ressentiront que des symptÃ´mes bÃ©nins ou â€ŽmodÃ©rÃ©s et guÃ©riront sans traitement particulier. â€Ž', '2020-05-23', 7, 10);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(50) NOT NULL,
  `pw_user` text NOT NULL,
  `state` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `email_user`, `pw_user`, `state`) VALUES
(5, 'amine@gmail.com', '$2y$10$ofR/Vc/YTYWH0T6EVrAQ7e.IFkEFbpvHuBgJrd8WXMty0Sb0EAcRy', '0'),
(6, 'sana@gmail.com', '$2y$10$pMfRgVWDTP2BFnc0EGQZRO5VQHhmf6Nz79sta.QFbQ1aLJnSoIqLK', '0'),
(7, 'chahedons1@gmail.com', '$2y$10$lJsv9QY8jadjiZ9TCk3GBeup6.qkUqC52Ej8XXzB8R4A8h0myLoWO', '0'),
(8, 'ali@gmail.com', '$2y$10$lrpKST0t4J1Y67iUN/ehfu4LimgUsfd46nqdH20/UFUM9o0T2B0ui', '0'),
(9, 'moslem@gmail.com', '$2y$10$Gh5QWBzY3C88kB2n50sm.uLwWv6/4/tL4k9ruk53SSkI/Rl/zMTxa', '0'),
(10, 'imen@gmail.com', '$2y$10$BJsLF9Fm5/N.GUk9Fr2dyOOM5uRqKQGDR1kEgQ2ifEUSihkX2vPeC', '0'),
(11, 'samar@gmail.com', '$2y$10$EeA2rOO.cth8sK2arnNY6uu89OGAByOwhskpRNORGK2Cmc9lWuEGm', '0'),
(12, 'ryhem@gmail.com', '$2y$10$uCABuD4NPaxhdFFySm.07.XfBc9lsWnDd3uM3GiuI1Wvv.D0vWqHC', '0'),
(14, 'eya@gmail.com', '$2y$10$We0Zs5lyX6KriVALmEaIa.cFJIgY3Bxx8Mr6FJmBG6q4doeA1pJBa', '0'),
(15, 'omar@gmail.om', '$2y$10$zff9BD67Gh6sjAApB6A9HuX3dd30oxcglWwAhpkeCJsBB9OMikNWG', '0'),
(16, 'marwa@gmail.com', '$2y$10$fVir83gYQaIgI7QHRD4IMuh93ArCDDdyfch.KnovMCXgDNEYcQAIi', '0'),
(17, 'ons@gmail.com', '$2y$10$CSciwwdp2me0h0Z5IrVQeeB23cDCmt56Nx3j22RK.fvppzoBOnuhW', '0'),
(18, 'rami@gmail.com', '$2y$10$AtsD5XEGvv8CTIzIu4omNeoARs5eKYbO8rRzIDKuLzbSM1H77A9tW', '0'),
(19, 'ahmed@gmail.com', '$2y$10$dOGpNeyB4nCboUkIg0TW..T4Zh4uteRaTwLq/EXf34SxmkJ13gFv2', '0'),
(20, 'malika@gmail.com', '$2y$10$/TOOMK4qjpA2K/QUVjbPHu9NYJyMKMkLeJKx0xVQjwphQ.71lJYCy', '0'),
(21, 'ali2@gmail.com', '$2y$10$IVNaytOKq6aTZdISC2N5RuZH4jN7JP.WTCwOdbs0Oq2k1EeWA0BIW', '0'),
(22, 'momo@gmail.com', '$2y$10$P79CUN0MqpxfgoSFpYHn8uy3/HAycI6duu2vjXwsBL0Ax5JM/GcZW', '0'),
(23, 'ridha@gmail.com', '$2y$10$0NRV2QLV4TJEDVuowmctA.tc0XGhSqgiPL4X7MaU7rfTPhBQBIJaW', '0'),
(24, 'mohamed@gmail.com', '$2y$10$RYHwLfWTOUI2JfWtBgHlbeAgmtYtztn4ppW.FrN/pXUSa/Rk.Xw9e', '0');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `intercation`
--
ALTER TABLE `intercation`
  ADD CONSTRAINT `intercation_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`user_rep`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
