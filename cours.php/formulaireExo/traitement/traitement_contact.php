<?php 
	require_once('./db/req_contact.php');

	/**
	* array $contact
	*/
	function traitementFormulaire(array $information){
		$erreurs = [];

		if (empty($informations ['prenom'])) {
			$erreurs ['nom'] = 'veuillez saisir un prénom';
		}

		if (empty($informations ['email']) && empty($informations['tel'])) {
			$erreurs ['tel'] = 'veuillez saisir au minima un numéro de téléphone ou une adresse email.';
		}

		if (!empty($erreurs)) {
			return [
				'succes' => false,
				'erreurs' => $erreurs,
			];
		}

		return [
			'sucess' => true,
		];
	}





?>