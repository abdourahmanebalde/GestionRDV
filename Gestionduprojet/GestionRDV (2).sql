-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 16 oct. 2019 à 16:46
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GestionRDV`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admin`
--

CREATE TABLE `Admin` (
  `id_admin` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telephone` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Admin`
--

INSERT INTO `Admin` (`id_admin`, `prenom`, `nom`, `email`, `password`, `telephone`, `id_profil`) VALUES
(1, 'petit', 'balde', 'balde@gmail.com', 'e7247759c1633c0f9f1485f3690294a9', 771234567, 1);

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE `disponibilite` (
  `id_disponibilte` int(11) NOT NULL,
  `date_disponibilte` date NOT NULL,
  `heure_disponibilte` time NOT NULL,
  `Id_medecin` int(11) NOT NULL,
  `datfin` date NOT NULL,
  `heurefin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id_disponibilte`, `date_disponibilte`, `heure_disponibilte`, `Id_medecin`, `datfin`, `heurefin`) VALUES
(1, '2019-10-04', '08:00:00', 1, '2019-10-31', '16:00:00'),
(2, '2019-10-04', '08:00:00', 2, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `Medecin`
--

CREATE TABLE `Medecin` (
  `id_medecin` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `id_specialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Medecin`
--

INSERT INTO `Medecin` (`id_medecin`, `prenom`, `nom`, `email`, `password`, `telephone`, `id_service`, `id_profil`, `id_specialite`) VALUES
(1, 'ndiappe', 'dieye', 'dieye@gmail.com', 'e7247759c1633c0f9f1485f3690294a9', 77123458, 1, 2, 1),
(2, 'demba', 'sow', 'sow@gmail.fr', 'e7247759c1633c0f9f1485f3690294a9', 781234678, 2, 2, 2),
(3, 'fgj', 'dfg', 'b@gmail.com', 'e7247759c1633c0f9f1485f3690294a9', 77123458, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Patient`
--

CREATE TABLE `Patient` (
  `id_patient` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` char(5) NOT NULL,
  `id_secretaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Patient`
--

INSERT INTO `Patient` (`id_patient`, `prenom`, `nom`, `email`, `telephone`, `age`, `sexe`, `id_secretaire`) VALUES
(1, 'fatou', 'fall', 'fall@gmail.com', 781234567, 30, 'F', 1),
(2, 'ibu', 'dieme', 'dieme', 78123458, 2, 'H', 2);

-- --------------------------------------------------------

--
-- Structure de la table `Profil`
--

CREATE TABLE `Profil` (
  `id_profil` int(11) NOT NULL,
  `nom_profil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Profil`
--

INSERT INTO `Profil` (`id_profil`, `nom_profil`) VALUES
(1, 'admin'),
(2, 'medecin'),
(3, 'secretaire');

-- --------------------------------------------------------

--
-- Structure de la table `Rdv`
--

CREATE TABLE `Rdv` (
  `id_rdv` int(11) NOT NULL,
  `date_rdv` date NOT NULL,
  `heure_rdv` time NOT NULL,
  `id_medecin` int(11) NOT NULL,
  `id_secretaire` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Rdv`
--

INSERT INTO `Rdv` (`id_rdv`, `date_rdv`, `heure_rdv`, `id_medecin`, `id_secretaire`, `id_patient`) VALUES
(1, '2019-10-04', '08:00:00', 1, 1, 1),
(2, '2019-10-04', '08:00:00', 2, 2, 2),
(3, '2019-10-16', '12:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Secretaire`
--

CREATE TABLE `Secretaire` (
  `id_secretaire` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telephone` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Secretaire`
--

INSERT INTO `Secretaire` (`id_secretaire`, `prenom`, `nom`, `email`, `password`, `telephone`, `id_service`, `id_profil`) VALUES
(1, 'mouna', 'sane', 'sane@gmail.com', 'e7247759c1633c0f9f1485f3690294a9', 701234567, 1, 3),
(2, 'mareta', 'sow', 'sow@gmail.com', 'e7247759c1633c0f9f1485f3690294a9', 761234567, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Service`
--

CREATE TABLE `Service` (
  `id_service` int(11) NOT NULL,
  `nom_service` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Service`
--

INSERT INTO `Service` (`id_service`, `nom_service`) VALUES
(1, 'Cardiologie'),
(2, 'pediatrie'),
(3, 'chirurgie');

-- --------------------------------------------------------

--
-- Structure de la table `Specialite`
--

CREATE TABLE `Specialite` (
  `id_specialite` int(11) NOT NULL,
  `nom_specialite` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Specialite`
--

INSERT INTO `Specialite` (`id_specialite`, `nom_specialite`) VALUES
(1, 'cardiologue'),
(2, 'pediatre'),
(3, 'chirurgie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_profil` (`id_profil`);

--
-- Index pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD PRIMARY KEY (`id_disponibilte`),
  ADD KEY `Id_medecin` (`Id_medecin`);

--
-- Index pour la table `Medecin`
--
ALTER TABLE `Medecin`
  ADD PRIMARY KEY (`id_medecin`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_profil` (`id_profil`),
  ADD KEY `id_specialite` (`id_specialite`);

--
-- Index pour la table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`id_patient`),
  ADD KEY `id_secretaire` (`id_secretaire`);

--
-- Index pour la table `Profil`
--
ALTER TABLE `Profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `Rdv`
--
ALTER TABLE `Rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `Id_medecin` (`id_medecin`),
  ADD KEY `id_secretaire` (`id_secretaire`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Index pour la table `Secretaire`
--
ALTER TABLE `Secretaire`
  ADD PRIMARY KEY (`id_secretaire`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_profil` (`id_profil`);

--
-- Index pour la table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`id_service`);

--
-- Index pour la table `Specialite`
--
ALTER TABLE `Specialite`
  ADD PRIMARY KEY (`id_specialite`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  MODIFY `id_disponibilte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Medecin`
--
ALTER TABLE `Medecin`
  MODIFY `id_medecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Profil`
--
ALTER TABLE `Profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Rdv`
--
ALTER TABLE `Rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Secretaire`
--
ALTER TABLE `Secretaire`
  MODIFY `id_secretaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Service`
--
ALTER TABLE `Service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `Specialite`
--
ALTER TABLE `Specialite`
  MODIFY `id_specialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD CONSTRAINT `disponibilite_ibfk_1` FOREIGN KEY (`Id_medecin`) REFERENCES `Medecin` (`id_medecin`);

--
-- Contraintes pour la table `Rdv`
--
ALTER TABLE `Rdv`
  ADD CONSTRAINT `Rdv_ibfk_1` FOREIGN KEY (`id_secretaire`) REFERENCES `Secretaire` (`id_secretaire`),
  ADD CONSTRAINT `Rdv_ibfk_2` FOREIGN KEY (`Id_medecin`) REFERENCES `Medecin` (`id_medecin`),
  ADD CONSTRAINT `Rdv_ibfk_3` FOREIGN KEY (`id_patient`) REFERENCES `Patient` (`id_patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
