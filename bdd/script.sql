/*cree une bdd*/
CREATE DATABASE ecole284;

/*utiliser la bdd creer*/
USE ecole284;

/*creation de la table prof*/
CREATE TABLE Utilisateurs (

	ID_prof INT NOT NULL AUTO_INCREMENT,
	Nom VARCHAR(50) NOT NULL,
	Prenom VARCHAR(50) NOT NULL,
	matiere VARCHAR(100) NOT NULL,
	salle VARCHAR(100)NOT NULL,
	PRIMARY KEY (ID_Utilisateur)
);