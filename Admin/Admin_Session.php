<?php
include('connexion.php');
session_start();

$login_session = $_SESSION['Admin_username'];
$user_check = $_SESSION['Admin_id'];


/*$ses_sql = mysqli_query($con,"select id from Admin where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $user_id = $row['id'];*/

if (!isset($_SESSION['Admin_id'])) {
   header("location:../index.html");
   die();
}