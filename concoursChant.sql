-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 09 déc. 2021 à 13:49
-- Version du serveur :  10.3.31-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `concoursChant`
--

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `userID` int(11) DEFAULT NULL,
  `chanson` varchar(255) NOT NULL,
  `bandeSon` tinyint(1) NOT NULL DEFAULT 0,
  `nomFichier` varchar(255) NOT NULL DEFAULT '0',
  `validation` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`userID`, `chanson`, `bandeSon`, `nomFichier`, `validation`) VALUES
(1, 'Andrea Bocelli - Vivo Per Lei', 0, '0', 0),
(4, 'Bob Marley - No woman no cry', 0, '0', 0),
(3, 'Charles Aznavour - La Boheme', 0, '0', 0),
(26, 'Johnny Hallyday - Gabrielle', 0, '0', 0),
(2, 'les 10 commandements', 0, '0', 0),
(45, 'Michou - Dans le club', 1, '0', 0),
(47, 'OrelSan - La fête est finito', 0, '0', 0),
(28, 'Patrick Sébastien - La Danse des canards', 1, 'Hinder28.mp3', 0),
(25, 'Rammstein - Rosenrot', 1, '0', 0),
(48, 'Rammstein - Rosenroti', 1, 'Potterie48.mp3', 0),
(46, 'Van Halen - Jump', 0, '0', 0),
(5, 'Wejdene - Anissa', 0, '0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `dateNaissance` date NOT NULL,
  `numTelephone` varchar(14) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `statutMdp` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`nom`, `prenom`, `dateNaissance`, `numTelephone`, `email`, `statutMdp`, `password`, `ID`) VALUES
('cast', 'py', '1995-06-06', NULL, 'py.cast@gmail.com', 0, 'cc', 1),
('adou', 'sophie', '1995-01-01', NULL, 'sophiec@gmail.com', 0, 'vv', 2),
('bayart', 'jonathan', '1988-02-02', NULL, 'jo.bay@gmail.com', 0, 'bb', 3),
('dupont', 'bob', '2000-12-01', NULL, 'bobdup@gmail.com', 0, 'ff', 4),
('Charles', 'Ray', '1980-01-01', NULL, 'r.charles@gmail.com', 0, 'odd', 5),
('Bozo', 'Jijo', '1906-06-06', NULL, 'mdr@orange.fr', 0, 'bonjour', 6),
('JL', 'Follet', '1960-12-02', NULL, 'j.follet@ac-lille.fr', 0, '$2y$10$obXVYJARTz8r5XMRjMeqEuWz2oE/69ZIxTgvicJ9APo9bhqgLioSO', 9),
('Cast', 'Py', '1555-06-06', NULL, 'helsllc@gmgmg.fr', 0, '$2y$10$vlV4BOLOTUJx2cqxUYBcOe6bN9eQnvLVz9aQvHhys8Gw7cOztuoQe', 10),
('Maurice', 'Joe', '1975-12-05', '0614555555', 'j.momo@orange.com', 0, '$2y$10$UpLm5sbmKIL09WL85j.Na.7P5aLcfcaKQKCmHj8VHliOZbCJuQFfC', 11),
('Romain', 'Christophe', '1977-02-15', '0606060606', 'cromin@hacks.net', 0, '$2y$10$F4iAsRIdYpnvGZ.Op48XMe3zx8zcriwPTZlSBDYb2.1sbnkgJRf5C', 12),
('tom', 'van', '1998-08-15', '0614958445', 'tomvan@cc.nom', 0, '$2y$10$eatXDqit438aPXONqO.myesFhHhKBVeIq4isQH6KPQkFFuItx0vP6', 13),
('tom', 'van', '1998-08-15', '0614958445', 'tomvan@ccb.nom', 0, '$2y$10$LMHWgHTbdnB.TWCAfONkuuoqwsiRzXvaUfTZkwLbR.8WYYVVO.Swe', 14),
('maxime', 'bayou', '1944-05-05', '0606606060', 'maxbay@orange.fr', 0, '$2y$10$GTwaSTS203YvhGowEBpPS.9Ale90UdDjquluZqWZ/ef6jePGVKXKm', 15),
('Bernadette', 'Chirac', '1920-02-23', '0756451234', 'berniechichi@elysee.fr', 0, '$2y$10$PO4K99786Kt/3Dx591ApxeMB4MN4GhPru.sP62CNE8KnVLYbvJ1My', 16),
('Mentos', 'Menthe', '1995-06-06', '0606060606', 'mlem@gmail.com', 0, '$2y$10$4Dd5Hg45gDMCXBlCOP4psOKloYkMRj5oMgzJ/Kl0zZFWO1H1QC61C', 17),
('Jordy', 'Del', '1930-06-06', '0606060606', 'jlej@ribot.fr', 0, '$2y$10$L3Gf8inV8HRLLKfT5V77E.mK3V.D6vAVq5Cry48z9Mvn6bR0e34zy', 18),
('Joe', 'Dassin', '1930-12-12', '+32612304578', 'jodasse@gmail.com', 0, '$2y$10$z3A963GGQoy01zeOT3rvKOEVm5p3znGZgx9tkRRfwXa0XHJzCpZAG', 19),
('Toast', 'Bread', '1999-06-06', '+32620454545', 't.t@gmail.com', 0, '$2y$10$yHKdWr/ceps0cH4MSxHzhuV.b3vW/BMN9IwKSnGXAZtmJE/6vHXAm', 20),
('Dave', 'Dave', '1950-02-14', '+32615151515', 'd.d@gmail.com', 0, '$2y$10$xMaWAAjSDn9M.OIcu.CyZu/UhZAJQ0zMjzzf47HvXarGalL8QlBTa', 21),
('Denorme', 'Florent', '1985-05-16', '+33612534595', 'd.f@orange.fr', 0, '$2y$10$EYdpuXtuICtXSOhk8ha5VecMGXP0B3s/MqJ13dpJvWoEkqwMhJOW2', 22),
('mike', 'mike', '1980-06-06', '06066060660660', 'm.m@gmail.com', 0, '$2y$10$X3jvf478kVKqWTXtjk3c8eqP1v6uWdrE74VEnKqhpxWPDVhRvgheK', 23),
('Erwan', 'Presse', '1994-09-25', '+33612564578', 'e.presse@gmail.com', 0, '$2y$10$MvX2sIzsA4kZdM9/Q9JIj.s2ile55jUhkk5oQec1gaUl0xt6gj0X6', 24),
('Personne', 'Test', '1920-01-01', '00000000000000', 'test@test.fr', 0, '$2y$10$M01ZOIdo5dnF7AAej7s4oOkaKuZocLICylDaVVWclGQNL7GL69P92', 25),
('Daniel', 'Declerck', '1970-12-01', '06060660660660', 'dan@gmail.com', 0, '$2y$10$qVy3b4UPiov1h41nGvM0yOHCR0m9vgkFj7InkhPuI/Z8/eILRV3k2', 26),
('Dupontel', 'Géraldine', '2010-09-05', '0715151515', 'dupontel.g@gmail.com', 0, '$2y$10$LWuIq31NWLHj.6hrSwRwmObLsCw6Ztmal9YtpEMJjEGrGjb05smGm', 27),
('Hinder', 'Aymeric', '1993-09-12', '0612345678', 'a.hinder@bpascal.fr', 0, '$2y$10$T8JqNb7X9uG6kBoPCvn9auogH/CiJx1/M42SnUj9T66cWPPlJ.ZR.', 28),
('Guillaume', 'Tourneur', '1990-06-06', '06060660606066', 'guitour@mail.fr', 0, '$2y$10$FeKG2Myx601r6nai284XUeHCnzmlifsdFSn/yxtk7VJbmhdOZolNy', 29),
('Joey', 'Starr', '1966-06-06', NULL, 'ptitloulou93@live.fr', 0, '$2y$10$IabUVk6TP/OSgIUmGUoqfOuyS2ojZTrDoJ0Av0dYXQvItGS3xOJhC', 30),
('Joey', 'Starr', '1966-06-06', NULL, 'ptitloulou931@live.fr', 0, '$2y$10$TNLuMVS0Eg0kvbLJ04l99OVFX7Mk09zJZppJUzFqEmOUHT.fAZRqm', 31),
('Joey', 'Star', '1966-06-06', NULL, 'ptitloulou31@live.fr', 0, '$2y$10$FJ2wi8jPPmhRnqVg.pIHquSrfT7RAP1.d1O2Wq5VsALKJKcxUwACW', 33),
('Joey', 'Star', '1966-06-06', NULL, 'ptitloulou3199@live.fr', 0, '$2y$10$9VPxmjODedDyfmumrCVMtOrFBU4zc5vfLew97XcHbhOWQTZMkpTH6', 34),
('theo', 'theo', '1950-12-01', NULL, 't.t.t@gmail.com', 0, '$2y$10$rZBp80LlM56LMkR3mVgvwOkCnIrBb5pUXPY6GntGhaVWYSql4hy9e', 35),
('bbj', 'jkmlk', '1972-12-12', NULL, 'tilt@yahoo.fr', 0, '$2y$10$DgnrIzA5o0tZLq7OjM2Z3eieCPpTEFQUtWnidUwEw5TA3FaOnwOou', 36),
('coucou', 'hibou', '2010-12-12', NULL, 'chib@foret.com', 0, '$2y$10$a4ZeBDjD2SBrSQhyAgEQNOqw1bJoWUxk/dlAwabLg2A1W8bUWp6yG', 37),
('brief', 'projet', '1999-12-15', NULL, 'bproj@yahoo.fr', 0, '$2y$10$O05q35Z5Gd0.l9FYSklyJOhr2Uq59JG.fQUlT.br94GxjuDHh4C5G', 38),
('rob', 'rob', '1999-02-02', NULL, 'r.r.r@yahoo.fr', 0, '$2y$10$/oNANA8cjCC5/9e.wnKsJOvuZ57WlTki0M8Pmgzg8tSiw7mBvr0p6', 39),
('Sidki', 'Mehdi', '1999-12-12', '66666666666666', 'm.s@mail.fr', 0, '$2y$10$oxzcdqEPdLTZhWwcHmv3derjMcHNjL9Q8XWpJtVFUmXNNCgF.bANq', 40),
('bop', 'bip', '1999-02-02', '55555555555555', 'bb.b@mail.com', 0, '$2y$10$LvtZVOvTcv3hFaKWeMyqPOD7lmvr.U7XCsDVO8n.UqKMAf1UGCcXu', 41),
('Regniez', 'Jeremy', '1970-05-05', '66666666666666', 'jeregn@mail.fr', 0, '$2y$10$lJ8pC4r2eV0n8H6R58NSXunNMZflfiVUyBigjgeq9UpSKTftx1P5.', 42),
('Aliagas', 'Nikos', '1950-01-01', '11111111111111', 'nikaliag@free.fr', 0, '$2y$10$r/Hg16idw//1qX4BhHbNPO1aYUsoIEgIy2qUr4v6KloYjOI8qGqs6', 43),
('Admin', 'Admin', '1920-01-01', '00000000000000', 'admin@mail.com', 0, '$2y$10$qcezwrZdFhSmhN3UIbzTGOdpRtJUy9cYZW1MJaiLjz5pkPZKWIW62', 44),
('Son-Forget', 'Joachim', '1990-11-11', '66666666666666', 'j.ss@mail.fr', 0, '$2y$10$plpYrFKVREJ3s2mWVl1U2OwWgtiUfg..p3eK1tryouit4UT6GNhYO', 45),
('Follet', 'Jean-Louis', '1980-02-14', '00000000000000', 'jlf@mail.fr', 0, '$2y$10$VE7URmDk34JbohbcVEIcYOoQinI6uA2seox0HEDKUPvFhnguwcuD6', 46),
('Potterie', 'Benoit', '1975-08-06', '00000000000000', 'b.pot@mail.fr', 0, '$2y$10$Lli130GZq/Z6J80LAWT4veuevQsewvWdG4dfAWWY83sDaz2TNzT.a', 47),
('Potterie', 'Benoit', '1980-01-01', '00000000000000', 'ben.pot@gmail.com', 1, '$2y$10$ghXL5jaAZ8cMLrZx1IjY7u5mJ40TRMoq4bqSR0K8malkZvz0wnvCK', 48);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD UNIQUE KEY `chanson` (`chanson`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
