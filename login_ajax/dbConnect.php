<?php
  setlocale(LC_ALL, 'fr_FR');
	$hote = 'localhost';
	$bdd = 'aston';
	$util = 'root';
	$psw = '';
	try
	{
		$pdo = new PDO('mysql:host='.$hote.';dbname='.$bdd,$util,$psw);
		// On définit le codage en utf8
		$pdo->exec("set character set utf8");
	}
	catch (PDOException $e)
	{
		echo 'Connexion échouée :'.$e-> getMessage();
		exit();
	}

  
?>