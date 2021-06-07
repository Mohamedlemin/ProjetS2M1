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
                                           

                                             <th>Action</th>
                                         </tr>
                                     </thead>
                       
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     </section>





     <!-- modalL ajouter salle -->

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


        "fnDrawCallback": function(oSettings) {},
        "ajax": {
            "url": "customer.php",
            "type": "POST",
            "data": {
                method: "list_salle"

            },
            error: function(request, textStatus, errorThrown) {
                swal(request.responseJSON.message);
            }
        },

        columns: [
            {
                "data": "numero"
            },
            {
                "data": "nombreLits"
            },
            {
                "data": "nom"
            },
            { "data": null, render : function(data,type,row){
                   
                   return "<button title='Edit' class=' btn btn-icon  icon-left btn-warning btn-edit'><i class='far fa-user'></i></button> <button title='view' class='btn btn-icon  icon-left btn-info btn-d'><i class='fas fa-eye'></i></button> <button  title='Delete' class='btn btn-icon icon-left btn-danger btn-hapus' data-toggle='modal'><i class='fas fa-trash-alt'></i></button> ";
               } 		}
        ]


    });

     //supprimer salle

		$(document).on("click",".btn-hapus",function(){
			let current_row = $(this).parents('tr'); 
			if (current_row.hasClass('child')) { 
				current_row = current_row.prev(); 
			}
			let table = $('#tableSalle').DataTable(); 
			let data = table.row( current_row).data();
			let idcust = data.id;
			 swal({
    title: 'Vous etes sure?',
    text: 'Voulez-vous supprimer cette salle!',
    icon: 'error',
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
          	let ajax = {
					method : "deleteSalle",
					id_cust : idcust,
				}
				$.ajax({
					url:"customer.php",
					type: "POST",
					data: ajax,
					success: function(data, textStatus, jqXHR)
					{
		
						$resp = JSON.parse(data);
						if($resp['status'] == true){
                               swal('Success! la salle  a été supprimé  avex success!!', {
          icon: 'success',
        });
                            
                            
						
							let xtable = $('#tableService').DataTable(); 
							xtable.ajax.reload( null, false );
						}else{
							 swal('Error', 'le salle n a pas été supprimé!', 'error');
						}
     				
					},
					error: function (request, textStatus, errorThrown) {
						swal("Error ", request.responseJSON.message, "error");
					}
				});
     
      } 
    });
			
		});
          // fin supprim salle

    $(document).on("click", ".btn-d", function() {

        window.location.href = "detailSalle.php";

    });


    $("#btn_add").click(function() {
        $("#modalAjoutSalle").modal("show");

    });
});
 </script>