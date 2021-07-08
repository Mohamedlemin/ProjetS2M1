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
                                             <th>NUMERO</th>
                                             <th>NOMBRE LIT</th>
                                             <th>SERVICE</th>


                                             <th>ACTION</th>
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
                     <form>
                         <div class="form-row">
                             <input type="hidden" id="crud" value="N">
                             <input type="hidden" id="id">
                             <div class="form-group col-md-12">
                                 <label for="inputPassword4">Service</label>
                                 <select id="service" class="form-control">

                                     <?php
                                        //la connexion avec la base de données


                                        $result = mysqli_query($con, "select ids,nom from service");


                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['ids'];

                                            $var = $row['nom'];




                                        ?>
                                     <option value="<?php echo $id; ?>"><?php echo $var; ?></option>

                                     <?php
                                        }

                                        ?>
                                 </select>
                             </div>
                         </div>
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="inputEmail4">Numero</label>
                                 <input type="text" class="form-control" id="num" placeholder="nul">
                             </div>
                             <div class="form-group col-md-6">
                                 <label for="inputPassword4">Nombre de lit</label>
                                 <input type="text" class="form-control" id="nb" placeholder="Nombre lit">
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

        columns: [{
                "data": "numero"
            },
            {
                "data": "nombreLits"
            },
            {
                "data": "nom"
            },
            {
                "data": null,
                render: function(data, type, row) {

                    return "<button title='Edit' class=' btn btn-icon  icon-left btn-info btn-edit'><i class='fas fa-pencil-alt'></i>Modifier</button>  <button  title='Delete' class='btn btn-icon icon-left btn-danger btn-hapus' data-toggle='modal'><i class='fas fa-trash-alt'></i>Supprimer</button> ";
                }
            }
        ]


    });


    //ajout salle
    $("#btn_add").click(function() {
        $("#modalAjoutSalle").modal("show");
        $('.modal-title').text("Ajouter Salle");
        $("#service").val("");
        $("#num").val("");
        $("#nb").val("");
        $("#crud").val("N");


    });
    $("#btn-save").click(function() {
        if ($("#crud").val() == 'N') {

            ajoutSalle($("#service option:selected").attr("value"), $("#num").val(), $("#nb").val());
        } else {

            editSalle($("#id").val(), $("#service option:selected").attr("value"), $("#num").val(), $(
                "#nb").val());

        }

    });
    //fin ajout salle

    //supprimer salle

    $(document).on("click", ".btn-hapus", function() {
        let current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        let table = $('#tableSalle').DataTable();
        let data = table.row(current_row).data();
        let idcust = data.id;
        swal({
                title: 'Vous etes sure?',
                text: 'Voulez-vous supprimer cette salle!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    let ajax = {
                        method: "deleteSalle",
                        id_cust: idcust,
                    }
                    $.ajax({
                        url: "customer.php",
                        type: "POST",
                        data: ajax,
                        success: function(data, textStatus, jqXHR) {

                            $resp = JSON.parse(data);
                            if ($resp['status'] == true) {
                                swal('Success! la salle  a été supprimé  avex success!!', {
                                    icon: 'success',
                                });



                                let xtable = $('#tableSalle').DataTable();
                                xtable.ajax.reload(null, false);
                            } else {
                                swal('Error', 'le salle n a pas été supprimé!',
                                    'error');
                            }

                        },
                        error: function(request, textStatus, errorThrown) {
                            swal("Error ", request.responseJSON.message, "error");
                        }
                    });

                }
            });

    });
    // fin supprim salle

    //debut edit salle

    $(document).on("click", ".btn-edit", function() {
        var current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        var table = $('#tableSalle').DataTable();
        var data = table.row(current_row).data();
        if ($("input[id=service]").val() == data.nom) {
            $("input[id=service]").prop("checked", true);


        }
        $("#id").val(data.id);
        $("#num").val(data.numero);
        $("#nb").val(data.nombreLits);
        $("#modalAjoutSalle").modal("show");
        $('.modal-title').text("Modifier Salle");
        $("#crud").val("E");


    });

    //fin edir salle





    //fonction ajout Salle
    function ajoutSalle(s, nm, nb) {
        let ajax = {
            method: "new_salle",
            sr: s,
            nm: nm,
            nb: nb

        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modalAjoutSalle").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'la salle a eté ajouter avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tableSalle').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.error({
                        title: 'Erreur!',
                        message: 'la salle n a pas eté ajouter avec success!',
                        position: 'topRight'
                    });
                }
            },
            error: function(request, textStatus, errorThrown) {
                swal("Error ", request.responseJSON.message, "error");
            }
        });
    }
    // fin fonction ajout service
    //fonction MODIF Salle

    function editSalle(id, s, nm, nb) {
        let ajax = {
            method: "editSalle",
            id: id,
            sr: s,
            nm: nm,
            nb: nb




        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modalAjoutSalle").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'le salle a eté modifier avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tableSalle').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.warning({
                        title: 'Erreur!',
                        message: 'le salle n a pas eté modifier avec success!',
                        position: 'topRight'
                    });
                }
            },
            error: function(request, textStatus, errorThrown) {
                swal("Error ", request.responseJSON.message, "error");
            }
        });
    }






});
 </script>