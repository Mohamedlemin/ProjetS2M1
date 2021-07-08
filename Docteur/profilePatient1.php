
<?php  

include('Docteur_Session.php');
include 'header.php';
$idp=$_GET["id"];
$sql3= "update urgence set status='oui' where id_malade like '$idp'; ";
$resultat3 = mysqli_query($con,$sql3);



?>
 <?php
          
       
   

    $sql= "select * from malade  where id like '$idp'; ";
               $resultat = mysqli_query($con,$sql);
                if(mysqli_num_rows($resultat)>0){
                    while($lignn=mysqli_fetch_row($resultat)){
                      $num=$lignn[1];
                        
                           $nom=$lignn[2];
                           $adr=$lignn[3];
                           $tel=$lignn[4];
                           $dg=$lignn[5];
                           $age=$lignn[6];
                           $sexe=$lignn[7];
                           $dated=$lignn[8];
              
              

                    }
                }

                $sql1= "select * from hospitaliser  where num_malade like '$idp'; ";
                $resultat1 = mysqli_query($con,$sql1);
                 if(mysqli_num_rows($resultat1)>0){
                     while($lignn=mysqli_fetch_row($resultat1)){
                           $numlit=$lignn[1];
                         
                            $id_sale=$lignn[0];
                            
               
 
                     }
                 }

                 $sql2= "select * from salle  where id like '$id_sale'; ";
                 $resultat2 = mysqli_query($con,$sql2);
                  if(mysqli_num_rows($resultat2)>0){
                      while($lign=mysqli_fetch_row($resultat2)){
                            $nm=$lign[1];
                          
                            
                             
                
  
                      }
                  }

                  $sql3= "select * from docteur  where id like '$user_check'; ";
                  $resultat3 = mysqli_query($con,$sql3);
                   if(mysqli_num_rows($resultat2)>0){
                       while($lign=mysqli_fetch_row($resultat3)){
                             $nomd=$lign[1];
                           
                             
                              
                 
   
                       }
                   }
                   $sql4= "select * from service  where directeur like '$user_check'; ";
                   $resultat4 = mysqli_query($con,$sql4);
                    if(mysqli_num_rows($resultat4)>0){
                        while($lign=mysqli_fetch_row($resultat4)){
                              $noms=$lign[2];
                            
                              
                               
                  
    
                        }
                    }
 

?>


  <!-- Start app main Content -->
 <!-- Main Content -->
      <div class="main-content">
           
        <section class="section">
                 <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tv"></i></a></li>
                        <li class="breadcrumb-item"><a href="listePatient.php"><i class="fas fa-procedures"></i> Liste Patient </a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-user"></i> Profile Patient </a></li>
                      
                       
                      </ol>
                    </nav>
                    <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar">S</a>
                                    </div>
                                    
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"></h3>
                                                <small class="text-muted">Patient</small>
                                                <div class="staff-id">Nom :<?php
                                                       echo $nom;
                                                        ?> </div>
                                              
                                                  <div class="staff-id">Age :<?php
                                                       echo $age;
                                                        ?> </div>

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                 <li>
                                                    <span class="title">Num:</span>
                                                    <span class="text"><?php
                                                       echo $num;
                                                        ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Tel:</span>
                                                    <span class="text"><?php
                                                       echo $tel;
                                                        ?></span>
                                                </li>
                                                 <li>
                                                    <span class="title">Adresse:</span>
                                                    <span class="text"><?php
                                                       echo $adr;
                                                        ?></span>
                                                </li>
                                                 <li>
                                                    <span class="title">Sexe:</span>
                                                    <span class="text"><?php
                                                       echo $sexe;
                                                        ?></span>
                                                </li>
                                                 
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                	<div class="profile-tabs">
					  <ul class="nav  nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">info medicale </a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Diagnostics</a></li>
						
					</ul>
    </div>
                	<div class="tab-content">
 <!--debut lien information personnel du patient --> 
						<div class="tab-pane show active" id="about-cont">
                            
                            
                            
                            
                       <div class="row">
                          <div class="col-md-12">
                              <div class="card-box">
                                  <h3 class="card-title"> Hospitalisation</h3>
                                  <ul class="personal-info">
                                      <li>
                                          <span class="title">Nom Service</span>
                                          <span class="text"><?php
                                                       echo $noms;
                                                        ?></span>
                                      </li>
                                      <li>
                                          <span class="title">Directeur:</span>
                                          <span class="text"><?php
                                                       echo $nomd;
                                                        ?></span>
                                      </li>
                                      <li>
                                          <span class="title">Numero Salle:</span>
                                          <span class="text"><?php
                                                       echo $nm;
                                                        ?></span>
                                      </li>
                                      <li>
                                          <span class="title">Numero lit:</span>
                                          <span class="text"> <?php
                                                       echo $numlit;
                                                        ?></span>
                                      </li>
                                    
                                      

                                  </ul>

                              </div>
                        
                          </div>
                      </div>        
                        </div>
                           <div class="tab-pane" id="bottom-tab2">
                        <div class="row">
                         <div class="col-sm-12">
                     <div class="card">
                  <div class="boxs mail_listing">
                    <div class="inbox-body no-pad">
                      <section class="mail-list">
                        <div class="mail-sender">
                          <div class="mail-heading">
                           
                          </div>
                          <hr>
                          <div class="media">
                           
                            <div class="media-body">
                              <span class="date pull-right"><?php
                                                       echo $dated;
                                                        ?></span>
                              <h5 class="text-primary">Diagnostic</h5>
                             
                            </div>
                          </div>
                        </div>
                        <div class="view-mail p-t-20">
                          <p><?php
                                                       echo $dg;
                                                        ?></p>
                        
                        </div>
                    
                   
                      </section>
                    </div>
                  </div>
                </div>

                                </div>
          
         
      
            
            
            
                
         
<?php  include 'footer.html'; ?>
          