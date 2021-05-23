 <!-- include header -->
 <?php include 'header.html'; ?>

 <!-- debut du contenu de l app -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Details Salle</h1>

             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i> Accueil</a></div>
                 <div class="breadcrumb-item"><a href="#"><i class="fa fa-calendar"></i> Service</a></div>

             </div>
         </div>
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <button href="#" class="btn btn btn-info btn-rounded float-right" id="modal-5"><i class="fa fa-plus"></i> Ajouter Surveillant</button>



                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-12 col-sm-12 col-md-4">
                             <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-wheelchair"></i> Patient</a></li>
                                 <li class="nav-item"><a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-user-md"></i> Surveillant</a></li>

                             </ul>
                         </div>
                         <div class="col-12 col-sm-12 col-md-8">
                             <div class="tab-content no-padding" id="myTab2Content">
                                 <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                     <div class="card">


                                         <div class="card-body">
                                             <div class="clearfix mb-3"></div>

                                             <div class="table-responsive">
                                                 <table class="table table-striped v_center" id="table-2">
                                                     <thead>
                                                         <tr>


                                                             <th><i class="fa fa-user-md"></i></th>
                                                             <th>Nom</th>
                                                             <th>tel</th>
                                                             <th>Adresse</th>

                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>

                                                             <td><i class="fa fa-user-md"></i></td>
                                                             <td> AHMED SALEM</td>
                                                             <td>22222</td>

                                                             <td>iff</td>


                                                         </tr>


                                                     </tbody>
                                                 </table>
                                             </div>

                                         </div>
                                     </div>


                                 </div>
                                 <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                     <div class="card">


                                         <div class="card-body">
                                             <div class="clearfix mb-3"></div>

                                             <div class="table-responsive">
                                                 <table class="table table-striped v_center" id="table-1">
                                                     <thead>
                                                         <tr>

                                                             <th>Nom</th>
                                                             <th>tel</th>
                                                             <th>Adresse</th>
                                                             <th>Rotation</th>
                                                             <th>Salaire</th>
                                                             <th>Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>


                                                             <td> AHMED SALEM</td>
                                                             <td>22222</td>
                                                             <td>iff</td>
                                                             <td>iff</td>
                                                             <td>122333</td>
                                                             <td> <button href="#" class="btn btn-icon btn-primary" id="modal-e" data-toggle="tooltip" data-placement="top" title="modifier infirmier"><i class='far fa-edit'></i></button>
                                                                 <a href="#" class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer infirmier"><i class='fas fa-trash-alt'></i></a>
                                                             </td>
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
             </div>
         </div>

     </section>


 </div>
 <!-- fin Content -->
 <!-- include footer -->
 <?php include 'footer.html'; ?>