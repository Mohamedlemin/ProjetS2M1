 <!-- include header -->
 <?php include 'header.html'; ?>

 <!-- debut du contenu de l app -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Liste Service</h1>

             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i> Accueil</a></div>
                 <div class="breadcrumb-item"><a href="#"><i class="fa fa-calendar"></i> Service</a></div>

             </div>
         </div>

         <div class="section-body">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <button href="#" class="btn btn btn-warning btn-rounded float-right" id="modal-5"><i class="fa fa-plus"></i> Ajouter Service</button>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped v_center" id="table-1">
                                     <thead>
                                         <tr>
                                             <th>Code</th>
                                             <th>Nom</th>
                                             <th>Batiment</th>
                                             <th>Directeur</th>

                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>

                                             <td>fc12</td>
                                             <td> Pediatrie</td>
                                             <td>Batiment1</td>
                                             <td>dr.Ahmed salem</td>
                                             <td> <button href="#" class="btn btn-icon btn-primary" id="modal-0" data-toggle="tooltip" data-placement="top" title="modifier service"><i class="far fa-edit"></i>Modifier</button>
                                                 <a href="#" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer service"><i class="fas fa-times"></i> Supprimer</a>
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
     <!-- modal ajouter service -->


     <form class="modal-part" id="modal-login-part">

         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="inputEmail4">Code</label>
                 <input type="text" class="form-control" id="inputEmail4" placeholder="code">
             </div>
             <div class="form-group col-md-6">
                 <label for="inputPassword4">Nom</label>
                 <input type="text" class="form-control" id="inputPassword4" placeholder="Nom Service">
             </div>
         </div>
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="inputEmail4">Batiment</label>
                 <input type="text" class="form-control" id="inputEmail4" placeholder="Batiment">
             </div>
             <div class="form-group col-md-6">
                 <label for="inputPassword4">Directeur</label>
                 <select id="inputState" class="form-control">
                     <option selected>Choose...</option>
                     <option>...</option>
                 </select>
             </div>
         </div>

     </form>
     <!-- modal modifier service -->


     <form class="modal-part" id="modif">



         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="inputEmail4">Code</label>
                 <input type="text" class="form-control" id="inputEmail4" placeholder="code">
             </div>
             <div class="form-group col-md-6">
                 <label for="inputPassword4">Nom</label>
                 <input type="text" class="form-control" id="inputPassword4" placeholder="Nom Service">
             </div>
         </div>
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="inputEmail4">Batiment</label>
                 <input type="text" class="form-control" id="inputEmail4" placeholder="Batiment">
             </div>
             <div class="form-group col-md-6">
                 <label for="inputPassword4">Directeur</label>
                 <select id="inputState" class="form-control">
                     <option selected>Choose...</option>
                     <option>...</option>
                 </select>
             </div>
         </div>

     </form>
 </div>
 <!-- fin Content -->
 <!-- include footer -->
 <?php include 'footer.html'; ?>