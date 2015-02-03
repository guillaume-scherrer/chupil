<?php
	$id = $_GET['id'];
	foreach ($_GET as &$value) {
		$key = array_search($value, $_GET);
		if($key =='id'){

		}else{
    		$mysqli = new mysqli("localhost", "root", "", "chupil") or die("Connection failed: " . $mysqli->connect_error);
    		$sql = "UPDATE produit SET ".$key." = ".$value." WHERE id = ".$id.";";
    		$requete = $mysqli->query($sql);
    		echo $sql."</br>";
    		if($requete){
    			header("Location : index.php");
    		}
		}
	}
?>