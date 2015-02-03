<?php
	$mysqli = new mysqli("localhost", "root", "", "chupil") or die("Connection failed: " . $mysqli->connect_error);
	$_P = isset($_GET['produit']); // Existence du Nom du produit
	$_Q = isset($_GET['quantite']); // Existence Quantite du produit
	$_J	= isset($_GET['jours']); //  Existence Jours de la péremption
	$_M	= isset($_GET['mois']); //  Existence Moi de la péremption
	$_Pr = isset($_GET['prix']); //  Existence Prix voulu par l'agriculteur
	if($_P && $_Q && $_M && $_J && $_Pr){
		$_Prod = $_GET['produit']; // Nom du produit
		$_Quant = $_GET['quantite']; // La Quantité du produit
		$_Jours = $_GET['jours']; // Jours de la péremption
		$_Mois = $_GET['mois']; // Moi de la péremption
		$_Prix = $_GET['prix']; //Prix voulu par l'agriculteur
		$sql = "INSERT INTO `chupil`.`produit` (`id`, `nom`, `quantite`, `peremption_j`, `peremption_m`,`prix`, `vendu`) VALUES (NULL,  '".$_Prod."',  '".$_Quant."',  '".$_Jours."',  '".$_Mois."', '".$_Prix."',0);";		
		$requete = $mysqli->query($sql);		
		if($requete){
			header("Location: index.php");
		}else{
			echo "Un problème a eu lieu, veuillez réessayer ultérieurement";
		}

	}else{
		echo "Erreur dans la saisie du formulaire";
	}
?>