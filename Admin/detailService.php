 <!-- include header -->
<?php  include 'header.html'; ?>

  <!-- debut du contenu de l app -->
        <div class="main-content">
            <section class="section">
             <div class="section-header">
                    <h1>Details Service</h1>
                   
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i>  Accueil</a></div>
                        <div class="breadcrumb-item"><a href="#"><i class="fa fa-calendar"></i> Service</a></div>
                      
                    </div>
                </div>
                <div class="section-body">
                  

                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                   <ul class="nav nav-pills" id="myTab3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-hospital-o"></i>  Salles</a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-user-md"></i>   Employer</a></li>
                                       
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
                                     <button href="#" class="btn btn btn-warning btn-rounded float-right" id="modal-a" ><i class="fa fa-plus"></i> Ajouter Salle</button>
                                             
                                       </div>
                                       <div class="card-body">
                                           
                                        <div class="clearfix mb-3"></div>
                                  
                                        <div class="table-responsive">
                                            <table class="table table-striped v_center" id="table-1">
                                                <thead>
                                                <tr>
                                                <th>numero</th>
                                                <th>nombre lit</th>
                                                <th>nombre patient</th>
                                              
                                                 <th>Action</th>
                                                </tr>
                                               </thead>
                                                <tbody>
                                                <tr>
                                               
                                                <td>1</td>
                                                <td> 10</td>
                                                <td>5</td>
                                               
                                                <td> <button href="#" class="btn btn-icon btn-primary"  id="modal-m"><i class="far fa-edit"> Modifier</i></button>
                                                <a href="detailSalle.php" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i> Detail</a>  <a href="#" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer salle"><i class="fas fa-times"></i> Supprimer</a></td>
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
                                       <div class="card-header">
                                             <div class="float-right">
                                                  <button href="#" class="btn btn btn-warning btn-rounded float-right" id="modal-ea" ><i class="fa fa-plus"></i> Ajouter Employer</button>
                                             </div>
                                       </div>
                                       <div class="card-body">
                                        <div class="clearfix mb-3"></div>
                                  
                                        <div class="table-responsive">
                                            <table class="table table-striped v_center" id="table-2">
                                                <thead>
                                                <tr>
                                                <th>Numero</th>
                                                <th>Nom</th>
                                                <th>tel</th>
                                                <th>Role</th>
                                                 <th>Action</th>
                                                </tr>
                                               </thead>
                                                <tbody>
                                                <tr>
                                               
                                                <td>1</td>
                                                <td> AHMED SALEM</td>
                                                <td>22222</td>
                                                 <td>Docteur</td>
                                                <td> <button href="#" class="btn btn-icon btn-primary" id="modal-e"><i class='far fa-edit'></i></button>
                                                <a href="detailService.php" class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="top" title="details service"><i class="fas fa-info-circle"></i></a>  <a href="#" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer service"><i class='fas fa-trash-alt'></i></a></td>
                                                </tr>
                                             
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
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
