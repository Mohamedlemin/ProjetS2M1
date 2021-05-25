 <!-- include header -->
 <?php include('Admin_Session.php');
  include 'header.html'; ?>

 <!-- debut du contenu de l app -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Liste Salle</h1>

             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i> Accueil</a>
                 </div>
                 <div class="breadcrumb-item"><a href="#"><i class="fa fa-hospital-o"></i> Salle</a></div>

             </div>
         </div>

         <div class="section-body">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <button href="#" class="btn btn btn-primary btn-rounded float-right" id="btn_add"><i
                                     class="fas fa-plus-circle"></i> Ajouter Salle</button>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped v_center" id="tableSalle">
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

                                             <td> <button href="#" class="btn btn-icon btn-primary"><i
                                                         class="fas fa-plus-square"> </i></button>
                                                 <button href="#" class="btn btn-icon btn-info btn-d"><i
                                                         class="fas fa-eye"> </i></button>
                                                 <a href="#" class="btn btn-icon btn-danger" data-toggle="tooltip"
                                                     data-placement="top" title="supprimer salle"><i
                                                         class="fas fa-trash-alt"></i> </a>
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

     <div class="modal fade" id="modalAjoutSalle" tabindex="-1" role="dialog" aria-labelledby="formModal"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="formModal">Ajouter Salle</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form id="service">
                         <div class="form-row">
                             <div class="form-group col-md-12">
                                 <label for="inputPassword4">Service</label>
                                 <select id="inputState" class="form-control">
                                     <option selected>Choose...</option>
                                     <option>...</option>
                                 </select>
                             </div>
                         </div>
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

                         <button type="button" class="btn btn-outline-primary m-t-15 waves-effect"
                             id="btn-save">Ajouter</button>
                         <button type="button" class="btn btn-outline-danger m-t-15 waves-effect">Annuler</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>







 </div>
 <!-- fin Content -->
 <!-- include footer -->
 <?php include 'footer.html'; ?>
 <!-- js et ajax part -->
 <script type="text/javascript">
$(document).ready(function() {
    $('#tableSalle').DataTable({

        "autoWidth": false,


        "fnDrawCallback": function(oSettings) {}


    });

    $(document).on("click", ".btn-d", function() {

        window.location.href = "detailSalle.php";

    });


    $("#btn_add").click(function() {
        $("#modalAjoutSalle").modal("show");

    });
});
 </script>