<?php  
require_once('./db/connexion.php');
function recupererTout(){
	$connexion = connexionBdd();

	$requete = $connexion->prepare("SELECT * FROM contact");
	$requete->execute();

	$contacts = $requete->fetchAll();

	return $contacts;

}


?>