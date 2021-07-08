<?php
session_start();
$con=new mysqli("localhost","root","root","pfde");
            if($con->connect_error){die("eurreur de type" .$con->connect_error); }
            else "OK";





   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($con,"select username from personnel_medical where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
      header("location:../../index.html");
      die();
   }

?>
