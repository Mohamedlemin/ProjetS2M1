<?php
$id=$_GET['Mname'];
require_once("conee.php");
$ps=$pdo->prepare("DELETE FROM surveiller WHERE surveillant =?"); 
$params=array($id);
$ps->execute($params);
header("location:liste de salle.php");
?>