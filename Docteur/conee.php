<?php
try{
	$strConnection='mysql:host=localhost;dbname=projetm1s2';
	$pdo = new PDO($strConnection, 'root','root');
}
catch (PDOException $e){
	$msg = 'ERREUR PDO dans ' .$e->getMessage();
	die ($msg);
}