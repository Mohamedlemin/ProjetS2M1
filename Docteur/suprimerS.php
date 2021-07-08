<?php
$id=$_GET['Mname'];
require_once("conee.php");
$ps=$pdo->prepare("DELETE FROM salle WHERE id=?"); 
$params=array($id);
$ps->execute($params);
header("location:liste de salle.php");
?>