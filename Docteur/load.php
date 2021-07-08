<?php
include('connexion.php');
 include('Docteur_Session.php');
 

 $sql= "select * from service where directeur like '$user_check'; ";
 $resultat = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($resultat)){
    $ids=$row['ids'];

  } 
?>



<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Centre Medical</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="assets/style.css">
      <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
    
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
   
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    
</head>

<body id="bo" onload="initClock()">
<?php
       $st="no";
       $d=6;
      
                $query = "SELECT * from urgence where `status` like '$st' and id_service like '$ids'  ";
                $resultat = mysqli_query($con,$query);
                $nbpm=mysqli_num_rows($resultat); 

                if(($nbpm)>0){
                    
                ?>
               <span class="badge headerBadge1">
                   <?php echo $nbpm; ?>
                </span>
              <?php } ?>
              
    
    
    
    </body>
    
    
</html>