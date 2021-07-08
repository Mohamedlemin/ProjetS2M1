<?php
include('Docteur_Session.php');
include 'header.php';




//--------------------------------- sexe malade --------------------------------------------
$sql= "select * from soigner,malade where soigner.numero_malade=malade.id and soigner.numero_docteur like '$user_check' and sexe='Homme'; ";
$resultat = mysqli_query($con,$sql);
$nbpm=mysqli_num_rows($resultat); 


$query = "select * from soigner,malade where soigner.numero_malade=malade.id and soigner.numero_docteur like '$user_check' and sexe='Femme'; ";
$result = mysqli_query($con, $query); 
$nbpf=mysqli_num_rows($result); 



//-------------------------------------malade urgence---------------------------------------------
$sql1= "select * from service where directeur like '$user_check'; ";
$resultat1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_assoc($resultat1)){
   $ids=$row['ids'];

 } 
//malade urgence
$sql6= "select * from malade where id in (select id_malade from urgence where id_service like '$ids')  ; ";
                     $result1= mysqli_query($con,$sql6);
                     $nbmu=mysqli_num_rows($result1); 

//malade normale
$sql7= "select * from malade,soigner where malade.id=soigner.numero_malade and soigner.numero_docteur like '$user_check' and  id not in (select id_malade from urgence where id_service like '$ids')  ; ";
                     $result7= mysqli_query($con,$sql7);
                     $nbmn=mysqli_num_rows($result7); 
  



?>


<!-- Start app main Content -->
<div class="main-content">
           
           <section class="section">
           <div class="row">
                 
                 
                 
                             
                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       <div class="card">
                         <div class="card-statistic-4">
                           <div class="align-items-center justify-content-between">
                             <div class="row ">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                 <div class="card-content">
                                   <h5 class="font-15">Nombre patient</h5>
                                   <h2 class="mb-3 font-18"></h2>
                                   <p class="mb-0"><span class="col-blue" id="nbp">
                                   <?php
    
                          
           //nombre patients
                 $sqls= "select * from soigner where numero_docteur like '$user_check'; ";
           $resultat1 = mysqli_query($con,$sqls);
       $nbp=mysqli_num_rows($resultat1);
         echo $nbp;

?>
                                   
                                   
                                   
                                   </span> patient</p>
                                 </div>
                               </div>
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                 <div class="banner-img">
                                   <img src="assets/img/banner/o.jpg" alt="">
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Nombre Salle libre</h5>
                          <h2 class="mb-3 font-18"></h2>
                          <p class="mb-0"><span class="col-red"><?php
    
    //l id centre

$sql= "select ids from service where directeur like '$user_check'; ";
$resultat = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($resultat)){
  $ids=$row['ids'];

  //nombre docteur
          
  $sql1= "select * from salle,hospitaliser where hospitaliser.id_salle=salle.id and salle.nombreLits!=hospitaliser.numlit and salle.code like '$ids' ; ";
  $resultat2 = mysqli_query($con,$sql1);
 $nbd=mysqli_num_rows($resultat2);
echo $nbd;




}


?></span>   Salle</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/att.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Nombre Salle Occupé</h5>
                          <h2 class="mb-3 font-18"></h2>
                          <p class="mb-0"><span class="col-green"><?php
    
    //l id centre

$sql= "select ids from service where directeur like '$user_check'; ";
$resultat = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($resultat)){
  $ids=$row['ids'];

  //nombre docteur
          
  $sql1= "select * from salle,hospitaliser where hospitaliser.id_salle=salle.id and salle.nombreLits=hospitaliser.numlit and salle.code like '$ids' ; ";
  $resultat2 = mysqli_query($con,$sql1);
 $nbd=mysqli_num_rows($resultat2);
echo $nbd;




}


?></span>
                            Salle</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/doctor1.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Nombre d'infirmier</h5>
                          <h2 class="mb-3 font-18"></h2>
                          <p class="mb-0"><span class="col-pink"> <?php
    
                //l id centre
        
         $sql= "select ids from service where directeur like '$user_check'; ";
           $resultat = mysqli_query($con,$sql);
          while($row = mysqli_fetch_assoc($resultat)){
              $ids=$row['ids'];

            }     //nombre docteur
          
           $sql1= "select * from infirmier where id_service like '$ids'  ; ";
           $resultat2 = mysqli_query($con,$sql1);
          $nbd=mysqli_num_rows($resultat2);
    echo $nbd;
               
  






?>

</span>   Infirmier</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/p.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                 
            </div>


                 <!-----------------------------------profile---------------------------------->
                 <div class="row">
                   
               <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Statsitique</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart3"></canvas>
                  </div>
                </div>
              </div>
                       
                         <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Présentationn par sexe</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart2"></canvas>
                  </div>
                </div>
              </div>    
                       
                       
                       
                       
          
        
            </div>

                            <!--------------------------------------------------------------------->
                            <div class="row">
              <div class="col-12">
                <div class="card">
                   
                  <div class="card-header">
                  <h4>Liste Urgence </h4>
                      
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                     <table id="table-urgence" class="table  table-striped">
                        <thead>
                          <tr>
                            <th class="text-center">
                            <i class='fas fa-wheelchair'></i>
                            </th>
                            <th>NUMERO</th>
                            <th>NOM</th>
                           
                            <th>SEXE</th>
                         <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                             
                         
                       
                             <?php
                           
                                              //l id centre
                                     
                             
                                
                        
                                   $f=date("Y-m-d"); 
                                  
                                 $sqlf= "select malade.id,malade.numero,malade.nom,malade.sexe from malade,urgence  where malade.id=urgence.id_malade and id_service like '$ids' and urgence.date_urgence like '$f'  ; ";
                                            $resultat = mysqli_query($con,$sqlf);
                                             if(mysqli_num_rows($resultat)>0){
                                              while($row = mysqli_fetch_assoc($resultat)){
                                                $idp=$row['id'];
                                                $num=$row['numero'];
                                                     $nom=$row['nom'];
                                                     $sexe=$row['sexe'];
                                                  
                                                       echo"<tr>";
                                                         echo"<td> <i class='fas fa-wheelchair'></i></td>";
                                                         echo"<td>$num</td>";
                                                      echo"<td>$nom</td>";
                                                         echo"<td>$sexe</td>";
                                                       echo"<td> <a title='detail' href='profilePatient.php?id=$idp' class='btn btn-primary btn-d'><i class='fas fa-info-circle'></i> Detail Patient</a></td>";
                                                      echo"</tr>";
                                            
                                                 }
                                             }
                       
                                      
                           ?>
                                                      </tbody>
                                              
                     </table>
                  
                    </div>
                       
                  </div>
                     <input type="hidden"  id="id">
                   
 
                </div>
              </div>
            </div>
                          
                          
                          
                          
                          
                          
                          

           </section>

           </div>


           
         
        
           <?php  include 'footer.html'; ?>
<script type="text/javascript">

$(document).ready(function(){



   //refresh page
   setInterval(function(){
                    
                  
                  
                     $("#bel").load("load.php");
                     $(".dropdown-list-content").load("load1.php");
                 
              
               
                 
               
                 
                
             },1000);
             $('#table-urgence').DataTable({
            
          });
             
         
  
             
         
 
          });



          
          var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ["Masculin", "Feminin"],
		datasets: [{
			label: 'Sexe',
			data: [<?php  
                           //nombre patient masc
                               echo $nbpm;  
                          
                          ?> ,<?php  
                           //nombre patient masc
                               echo $nbpf;  
                          
                          ?>],
			borderWidth: 1,
			backgroundColor: [

'#fc544b',
'#6777ef'
],
			borderColor:  [

'#fc544b',
'#6777ef'
],
			borderWidth: 2.5,
			pointBackgroundColor: '#ffffff',
			pointRadius: 4
		}]
	},
	options: {
		legend: {
			display:true
		},
		scales: {
			yAxes: [{
				gridLines: {
					drawBorder:true ,
					color: '#f2f2f2',
				},
				ticks: {
					beginAtZero: true,
					
					fontColor: "#9aa0ac", // Font Color
				}
			}],
			xAxes: [{
				ticks: {
					display: true
				},
				gridLines: {
					display:true
				}
			}]
		},
	}
});
 
var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
	type: 'doughnut',
	data: {
		datasets: [{
			data: [
				<?php  
                           //nombre patient masc
                           echo  $nbmu;  
                          
                          ?> ,
				<?php  
                           //nombre patient masc
                                 echo $nbmn;   
                          
                          ?> 
				
			],
			backgroundColor: [

				'#fc544b',
				'#6777ef'
			],
			label: 'Dataset 1'
		}],
		labels: [
			'Urgence',
			'normal'
			
		],
	},
	options: {
		responsive: true,
		legend: {
			position: 'bottom',
		},
	}
});




      


</script>

