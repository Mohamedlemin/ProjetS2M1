<?php
$con = new mysqli("localhost", "root", "root", "Projetm1s2");
if ($con->connect_error) {
    die("eurreur de type" . $con->connect_error);
} else "OK";