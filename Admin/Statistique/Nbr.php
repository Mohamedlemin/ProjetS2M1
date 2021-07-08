<?php
include('../Admin_Session.php');
//Salle
$sql1 = "select * from salle ";
$resultat1 = mysqli_query($con, $sql1);
$nbrSalle = mysqli_num_rows($resultat1);
//nombre docteur
$sql2 = "select * from docteur ";
$resultat2 = mysqli_query($con, $sql2);
$nbrDoc = mysqli_num_rows($resultat2);
//nombre inf
$sql3 = "select * from infirmier ";
$resultat3 = mysqli_query($con, $sql3);
$nbrInf = mysqli_num_rows($resultat3);
//nombre pat
$sql4 = "select * from infirmier ";
$resultat4 = mysqli_query($con, $sql4);
$nbrMa = mysqli_num_rows($resultat4);