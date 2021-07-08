  <?php
   session_start();
include("connexion.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);


   //requete dans la table personnel
      $sql = "SELECT role FROM personnel_medical WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
     while($row = mysqli_fetch_assoc($result)){
            $cat=$row['role'];



    }
        $sql3 = "SELECT id FROM personnel_medical WHERE username = '$myusername' and password = '$mypassword'";
      $result3 = mysqli_query($con,$sql3);
     while($row = mysqli_fetch_assoc($result3)){
            $id=$row['id'];



    }
  $sql4= "select id_g from generaliste  where id_p like '$id' ; ";
                     $resultats = mysqli_query($con,$sql4);

                       while($rows=mysqli_fetch_assoc($resultats)){
            $idd=$rows['id_g'];

         }


 $count = mysqli_num_rows($result);

//requete dans la table specialiste
  $sql1 = "SELECT id FROM specialiste WHERE nom = '$myusername' and password = '$mypassword'";
    $result1 = mysqli_query($con,$sql1);
        while($rows=mysqli_fetch_assoc($result1)){
          $idsp=$rows['id'];

    }

 $count1 = mysqli_num_rows($result1);



//requete dans la table admin
  $sql2 = "SELECT id_admin FROM admin WHERE nom = '$myusername' and password = '$mypassword'";
    $result2 = mysqli_query($con,$sql2);

      while($rows=mysqli_fetch_assoc($result2)){
          $id=$rows['id_admin'];

    }

 $count2 = mysqli_num_rows($result2);








      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
          if($cat=='docteur'){
  $_SESSION['user_id'] = $id;
                $_SESSION['id_docteur'] = $idd;


         $_SESSION['login_user'] = $myusername;
   header("location:../../docteur/index.php");

          }
          elseif($cat=='infirmier'){

                           $_SESSION['login_user'] = $myusername;
            header("location:../../Espace_infermier/index.php");




          }
      }elseif($count1==1){
      $_SESSION['user_sp'] = $myusername;
        $_SESSION['sp_id'] =  $idsp;
       header("location:../../specialiste/index.php");




}

  elseif($count2==1){
    $_SESSION['login_user'] = $myusername;
        $_SESSION['user_id'] = $id;
        header("location:../../admin/index.php");





}




    else {
         $error = "Your Login Name or Password is invalid";
          echo $error;
      }
   }
?>


	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
