<?php

$idEleve = $_GET['idEleve'];

include ('model/utilisateurModel.php');
include('bdd/bdd.php');

$utilisateur = new Utilisateur($bdd);
$detailUtilsateur = $utilisateur->getUtilisateurById($idEleve);


var_dump($detailUtilsateur);
?>