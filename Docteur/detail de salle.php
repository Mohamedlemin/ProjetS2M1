<?php include 'Docteur_Session.php';?>
<?php  include 'header.html'; ?>
<?php  $id=$_GET['Mname'];
$idp=$_SESSION['Docteur_id']; ?>
<!--conection base d-->
<?php require_once("conee.php");
$req="SELECT * FROM `salle` JOIN hospitaliser JOIN malade WHERE salle.id like '%$id%'
And salle.id=hospitaliser.id_salle AND hospitaliser.num_malade=malade.id";
$ps=$pdo->prepare($req);
$ps->execute();	
$req1="SELECT * FROM salle join infirmier join surveiller where salle.id like '%$id%'
and salle.id=surveiller.`id-salle`
and surveiller.surveillant =infirmier.id";
$ps1=$pdo->prepare($req1);
$ps1->execute();	
$req2="SELECT * FROM salle  where salle.id like '%$id%'";
$ps2=$pdo->prepare($req2);
$ps2->execute();	
$req5="SELECT infirmier.nom FROM `infirmier` JOIN  surveiller JOIN service  WHERE infirmier.code =service.ids and service.directeur like $idp AND infirmier.id NOT IN (SELECT surveillant FROM surveiller)";
$ps5=$pdo->prepare($req5);
$ps5->execute();	
?>
?>
?><!-- Start app main Content -->
  <!-- Start app main Content -->
 <!-- Main Content -->
      <div class="main-content">
           
        <section class="section">
                 <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tv"></i></a></li>
                        <li class="breadcrumb-item"><a href="liste de salle.php"><i class="fas fa-hospital"></i> Liste des salles </a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-hospital"></i> Detail se salle</a></li>
                      </ol>
                    </nav>
            <div class="profile-tabs">
					  <ul class="nav  nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">surveiller salle:<?php echo $id;?></a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Patients salle:<?php echo $id;?></a></li>
						
					</ul>
    </div>  
    <div class="tab-content">
    <div class="tab-pane show active" id="about-cont">
                  <div class="row">
              <div class="col-12">
                <div class="card">
                   
                  <div class="card-header">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter surveiller</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                     <table id="tableservient" class="table  table-striped">
                     <thead>
                          <tr>
                          <th>Numero</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>telephone</th>
                            <th>rotation</th>
                            <th>salaire</th>
                            <th>Action</th>
                          </tr>
                         </thead>
                    
                          <tbody><?php while ($et1=$ps1->fetch()){ ?>
                                            <tr>
                                                <td>
                                                <?php echo($et1['numero']) ?>
                                                </td>
                                                <td><?php echo($et1['nom']) ?></td>
                                                <td><?php echo($et1['prenom']) ?></td>
                                                <td><?php echo($et1['tel']) ?></td>
                                                <td><?php echo($et1['rotation']) ?></td>
                                                <td><?php echo($et1['salaire']) ?></td>
                                                
                                              
                                                <td> 
                                            <a href="editS.php" class="btn btn-icon btn-primary" id="modal-e" data-toggle="tooltip" data-placement="top" title="modifier survellent"><i class='far fa-edit'></i></a>
                                        
                                        <a onclick ="return confirm('Etes vos sur ...?');"href="suprimerSS.php?Mname=<?php echo($et1['id'])?>" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer survellent"><i class='fas fa-trash-alt'></i></a>
                                                
                                        </td></tr>
                                 <?php }?> 
                            
                                            </tbody>
                       
                                            
                
                         
                               </table>
                  
                    </div>
                       
                  </div>
                  </div>
                       
                       </div> </div>
                       
                      
                       
                       </div>
                  <div class="tab-pane" id="bottom-tab2">
                  <div class="row">
              <div class="col-12">
                <div class="card">
                   
                <div class="card-header">
                
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                     <table id="tablepat" class="table  table-striped">
                     <thead>
                          <tr>
                          <th>Numero</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Numero De lit</th>
                            <th>Action</th>
                          </tr>
                         </thead>
                          <tbody>
                          <?php while ($et=$ps->fetch()){ ?>
                                            <tr>
                                                <td>
                                                <?php echo($et['numero']) ?>
                                                </td>
                                                <td><?php echo($et['nom']) ?></td>
                                                <td><?php echo($et['tel']) ?></td>
                                                <td><?php echo($et['numlit']) ?></td>
                                                <td> 
                                            
                                        <a href="profilePatient.php?Mname=<?php echo($et['numero'])?>" class="btn btn-icon btn-info btn-d" data-toggle="tooltip" data-placement="top" title="detail patient"><i class='fas fa-eye'></i></a>
                                        
                                                
                                        </td>
                                                </tr>
                                                <?php }?> 
                                            </tbody>
                       
                                            
                
                         
                               </table>
                  
                    </div>
                       
                  </div>
                    
                   
 
                </div>
              </div>
                            </section>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Ajouter une Servient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class=""action="ajoSS.php" method="post">
                  <div class="form-group">
                    
                    <div class="input-group">
                      
                      <input type="hidden" class="form-control" placeholder="Numero" name="Num" value="<?php echo $id;?>">
                    </div>
                  </div>
                  <div class="form-group">
                  <label>Nom de surveillant</label>
                  <select name="Numl" class="form-control">
					  <?php while($et5=$ps5->fetch()){?> 
                        <option><?php echo $et5["nom"]?></option>
                        <?php } ?>  
                      </select>
                     
                  </div>
                  <div class="form-group mb-0">
                  <input type="hidden" id="crud" value="N">
                     <input type="hidden" id="id">
                  </div>
                  <button type="submit" class="btn btn-outline-primary m-t-15 waves-effect"
                             id="btn-save">Ajouter</button>
                  <button type="button" class="btn btn-outline-danger m-t-15 waves-effect">Annuler</button>
                </form>
              </div>
            </div>
          </div>
        </div> 
            </div>
            </div>
                            </div>               </div>
                            </div>
            
          
        <!-- General JS Scripts -->
     
                            </div>        
<?php  include 'footer.html'; ?>
             
       