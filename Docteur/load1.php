<?php
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
    <link rel="stylesheet" href="in.css">
      <link rel="stylesheet" href="styleDate.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    
</head>

<body id="bo" onload="initClock()">
       <?php
                                $p=1;
                $query = "SELECT * from `urgence` where id_service like $ids  order by `date_urgence` DESC";
                $resultat = mysqli_query($con,$query);
                $nbpm=mysqli_num_rows($resultat); 
                 if(($nbpm)>0){
                  while($row = mysqli_fetch_assoc($resultat)){
                    
               
                  
                ?>
                         <a href="profilePatient1.php?id=<?php echo $row['id_malade'] ?>"
                                        style ="
                         <?php
                            if($i['status']=='no'){
                                echo "font-weight:bold;";
                            }
                         ?>
                         " class="dropdown-item">
                             <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span>
                        
                        
                      <span class="dropdown-item-desc"> <span class="message-user" style="<?php
                            if($row['status']=='no'){
                                echo "color:red;";
                            }
                         ?>">Nouveau Notification</span>
                   
                    <span class="time"><?php  $date1=date('F j, Y, g:i a',strtotime($row['date_urgence'])); 
                         setlocale(LC_TIME, "fr_FR", "French");
echo strftime("%A %d %B %G", strtotime($date1));
                                                        
                                                        
                                                        ?></span>
                  </span>
                </a>
                                                 
                  <?php 
                  
                     }
                 }
                        ?>
    
    
    
    </body>
    
    
</html>