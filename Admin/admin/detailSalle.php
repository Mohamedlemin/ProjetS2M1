 <!-- include header -->
<?php  include 'header.html'; ?>

  <!-- debut du contenu de l app -->
        <div class="main-content">
            <section class="section">
             <div class="section-header">
                    <h1>Details Service</h1>
                   
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i>  Accueil</a></div>
                        <div class="breadcrumb-item"><a href="#"><i class="fa fa-hospital-o"></i> Salle</a></div>
                      
                    </div>
                </div>
                <div class="section-body">
                  

                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                   <ul class="nav nav-pills" id="myTab3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-user-md"></i>  Surveillant</a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-pencil-alt"></i>   Editer</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent2">
                         <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                              <div class="row mt-4">
                                  <div class="col-12">
                                     <div class="card">
                                       <div class="card-header">
                                     <button href="#" class="btn btn btn-warning btn-rounded float-right" id="modal-a" ><i class="fa fa-plus"></i> Ajouter Surveillant</button>
                                             
                                       </div>
                                       <div class="card-body">
                                           
                                        <div class="clearfix mb-3"></div>
                                  
                                        <div class="table-responsive">
                                            <table class="table table-striped v_center" id="tableSur">
                                                <thead>
                                                <tr>
                                                <th>Nom Complet</th>
                                                <th>adresse</th>
                                                <th>tel</th>
                                                <th>rotation</th>
                                              
                                                 <th>Action</th>
                                                </tr>
                                               </thead>
                                                <tbody>
                                                <tr>
                                               
                                                <td>AHMED SIDI</td>
                                                <td> KIFF</td>
                                                <td>3388994</td>
                                                <td>Sol</td>
                                               
                                                <td> <button href="#" class="btn btn-icon btn-primary"  id="modal-m"><i class="far fa-edit"> Modifier</i></button>
                                              <a href="#" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer salle"><i class="fas fa-times"></i> Supprimer</a></td>
                                                </tr>
                                             
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                          </div>
                          <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                        <div class="row mt-4">
                                  <div class="col-12">
                                    <div class="card">
                                <form method="post" class="needs-validation" novalidate="">
                                    <div class="card-header">
                                        <h4>Edit Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nom Complet</label>
                                                <input type="text" class="form-control" value="Michelle" required="">
                                                <div class="invalid-feedback">Please fill in the first name</div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nom utilisateur</label>
                                                <input type="text" class="form-control" value="Green" required="">
                                                <div class="invalid-feedback">Please fill in the last name</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label>Email</label>
                                                <input type="email" class="form-control" value="Michelle@Green.com" required="">
                                                <div class="invalid-feedback">Please fill in the email</div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label>Mot de passe</label>
                                                <input type="tel" class="form-control" value="">
                                            </div>
                                        </div>
                                      
                                      
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                         </div>
                     </div>
                </div>
            </section>
               <!-- modal ajouter salle -->
                
               
                  <form class="modal-part"  id="modal-ajoutSale">
                     
              
                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Numero</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="nul">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Nombre de lit</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre lit">
                                        </div>
                    </div>
                        
             
            </form>
                   <!-- modal modifier salle -->
                
               
                  <form class="modal-part"  id="modifSalle">
              
             
             
                 <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Numero</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="nul">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Nombre de lit</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre lit">
                                        </div>
                    </div>
                     
            </form>
       
        </div>
 <!-- fin Content -->
   <!-- include footer -->        
<?php  include 'footer.html'; ?>
                        <!-- js et ajax part -->
<script type="text/javascript">
		$(document).ready(function(){
            	$('#tableSur').DataTable({
                    
                    	"autoWidth": false,
				
				
				"fnDrawCallback": function( oSettings ) {
				}
				
				
            }) ;
              
                $(document).on("click",".btn-d",function(){
			
            window.location.href="detailService.php";
		
		});
            
           
         $("#btn_add").click(function(){
				$("#modalAjoutSalle").modal("show");
               
				});
        });
</script>
