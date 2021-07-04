<?php
//Changer Le mot de passe ver ' ' si Vous Utilise XAMP
$con = new mysqli("localhost", "root", "root", "ProjetM1S2");
if ($con->connect_error) {
    die("eurreur de type" . $con->connect_error);
} else "OK";