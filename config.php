<?php 
	try {
		if($_SERVER['SERVER_ADDR'] !== '127.0.0.1'){
			$bdd = new PDO('mysql:host=localhost;dbname=hugohil','root','root');
		} else {
			$bdd = new PDO('mysql:host=localhost;dbname=hugohil','root','root');
		}
	} catch (Exception $e) {
		die('Erreur: '.$e->getMessage());
	}