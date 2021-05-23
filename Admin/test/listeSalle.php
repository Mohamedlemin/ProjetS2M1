 <!-- include header -->
 <?php include 'header.html'; ?>

 <!-- debut du contenu de l app -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Liste Salle</h1>

             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i> Accueil</a></div>
                 <div class="breadcrumb-item"><a href="#"><i class="fa fa-hospital-o"></i> Salle</a></div>

             </div>
         </div>

         <div class="section-body">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <button href="#" class="btn btn btn-primary btn-rounded float-right" id="modal-a"><i class="fas fa-plus-circle"></i> Ajouter Salle</button>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped v_center" id="table-1">
                                     <thead>
                                         <tr>
                                             <th>numero</th>
                                             <th>nombre lit</th>
                                             <th>Service</th>
                                             <th>nombre patient</th>

                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>

                                             <td>1</td>
                                             <td> 10</td>
                                             <td>Pediatrie</td>
                                             <td>5</td>

                                             <td> <button href="#" class="btn btn-icon btn-info" id="modal-m"><i class="fas fa-pen"> Modifier</i></button>
                                                 <a href="#" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="supprimer salle"><i class="
fas fa-trash-alt"></i> Supprimer</a>
                                             </td>
                                         </tr>


                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     </section>
     <!-- modal ajouter salle -->


     <form class="modal-part" id="modal-ajoutSale">


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


     <form class="modal-part" id="modifSalle">



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
 <?php include 'footer.html'; ?>