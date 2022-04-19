

--
-- Base de données : `DBcontact`
--
-- --------------------------------------------------------

--
-- Structure de la table `users`
--
CREATE DATABASE DBcontact;
USE DBcontact;

CREATE TABLE `users` (
  `Userid`  int NOT NULL AUTO_INCREMENT ,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DateSignup` datetime NOT NULL DEFAULT current_timestamp(),
   PRIMARY KEY (Userid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Structure de la table `Contact`
--

CREATE TABLE `Contact` (
  `id` int NOT NULL AUTO_INCREMENT ,
  `Avatar` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `FK_Userid` int  NOT NULL,
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





-- Contraintes pour la table `Contact`

ALTER TABLE `Contact` ADD FOREIGN KEY (`FK_Userid`) REFERENCES `users`(`Userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--ALTER TABLE `Contact`
--  ADD CONSTRAINT `Contact_ibfk_1` FOREIGN KEY (`FK_Userid`) REFERENCES `users` (`Userid`) ON DELETE CASCADE ON UPDATE CASCADE;
--COMMIT;

