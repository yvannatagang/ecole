<?php

//CRUD

class Utilisateur 
{
	
	function __construct($bdd)
	{
		$this->bdd = $bdd;
	}


	public function ajouterUtilisateur($nom, $prenom, $email)
	{
		$req = $this->bdd->prepare("INSERT INTO utilisateurs (Nom, Prenom, Email) VALUES (:nom , :prenom, :email)");
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':email', $email);

		return $req->execute();
	}



	public function allUtilisateur()
	{
		$req = $this->bdd->prepare("SELECT * FROM utilisateurs");
		$req->execute();
		return $req->fetchAll();
	}

	public function supprimerUtilisateur($id)
	{
		$req = $this->bdd->prepare("DELETE FROM utilisateurs WHERE ID_Utilisateur = ?");
		return $req->execute([$id]);
	}

    public function updateUtilisateur($nom, $prenom, $email, $id)
    {
        $stmt = $this->bdd->prepare("UPDATE utilisateurs SET nom = :nom, prenom = :prenom WHERE ID_Utilisateur = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':id', $id);
       return $stmt->execute();
    }

    public function getUtilisateurById($id) {
        $stmt = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE ID_Utilisateur = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

}


?>