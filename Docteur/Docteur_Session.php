<?php
include('connexion.php');
session_start();

$login_session = $_SESSION['Docteur_username'];
$user_check = $_SESSION['Docteur_id'];


/*$ses_sql = mysqli_query($con,"select id from Admin where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $user_id = $row['id'];*/

if (!isset($_SESSION['Docteur_id'])) {
    header("location:../index.html");
    die();
}