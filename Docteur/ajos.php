<?php  include 'Docteur_Session.php';?>
<?php require_once("conee.php");
$Num=$_POST['Num'];
$Numl=$_POST['Numl'];
$id=$_POST['id'];
$req="INSERT INTO salle(numero,nombreLits,code) VALUES(?,?,?)"; 
$ps=$pdo->prepare($req);
$params=array($Num,$Numl,$id);
$ps->execute($params);
header("location:liste de salle.php");
?>