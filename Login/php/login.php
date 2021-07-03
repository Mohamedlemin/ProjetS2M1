<?php
session_start();
include("connexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con, $_POST['username']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    //requete dans la table Admin
    $sql1 = "SELECT * FROM Admin WHERE username = '$myusername' and password = '$mypassword'";
    $result1 = mysqli_query($con, $sql1);
    while ($rows = mysqli_fetch_assoc($result1)) {
        $idsp = $rows['id'];
        $nom = $rows['nomComplet'];
    }

    $count1 = mysqli_num_rows($result1);



    //requete dans la table docteur
    $sql2 = "SELECT id FROM docteur WHERE username = '$myusername' and password = '$mypassword'";
    $result2 = mysqli_query($con, $sql2);

    while ($rows = mysqli_fetch_assoc($result2)) {
        $id = $rows['id'];
    }

    $count2 = mysqli_num_rows($result2);



    if ($count1 == 1) {
        //Admin
        $_SESSION['Admin_username'] = $myusername;
        $_SESSION['Admin_password'] = $mypassword;
        $_SESSION['Admin_id'] =  $idsp;
        $_SESSION['Admin_nomComplet'] =  $nom;
        header("location:../../Admin/index.php");
    } elseif ($count2 == 1) {
        //docteur
        $_SESSION['Docteur_username'] = $myusername;
        $_SESSION['Docteur_id'] = $id;
        header("location:../../Docteur/index.php");
    } else {
        //$error = "Your Login Name or Password is invalid";
        //echo $error;
        header("location:../../index.html");
    }
}