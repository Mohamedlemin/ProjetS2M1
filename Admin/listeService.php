 <!-- include header -->
 <?php include('Admin_Session.php');
    include 'header.html'; ?>

 <!-- debut du contenu de l app -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Liste Service</h1>

             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"> <a href="#"><i class="fas fa-tachometer-alt"></i> Accueil</a>
                 </div>
                 <div class="breadcrumb-item"><a href="#"><i class="fa fa-calendar"></i> Service</a></div>

             </div>
         </div>

         <div class="section-body">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <button href="#" class="btn btn btn-warning btn-rounded float-right" id="btn-add"><i
                                     class="fa fa-plus"></i> Ajouter Service</button>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped v_center" id="tableService">
                                     <thead>
                                         <tr>
                                             <th>Code</th>
                                             <th>Nom</th>
                                             <th>Batiment</th>
                                             <th>Directeur</th>

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

     <!-- modal ajouter et modifier service -->

     <div class="modal fade" id="modal-service" tabindex="-1" role="dialog" aria-labelledby="formModal"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="formModal">Ajouter Service</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form id="service">
                         <input type="hidden" id="crud" value="N">
                         <input type="hidden" id="id">
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="inputEmail4">Code</label>
                                 <input type="text" class="form-control" id="code" placeholder="code" required>
                             </div>
                             <div class="form-group col-md-6">
                                 <label for="inputPassword4">Nom</label>
                                 <input type="text" class="form-control" id="nom" placeholder="Nom Service">
                             </div>
                         </div>
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="inputEmail4">Batiment</label>
                                 <input type="text" class="form-control" id="batiment" placeholder="Batiment">
                             </div>
                             <div class="form-group col-md-6">
                                 <label>Docteur</label>
                                 <select class="form-control" id="dr">

                                     <?php
                                        //la connexion avec la base de données


                                        $result = mysqli_query($con, "select * from docteur");


                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['id'];

                                            $var = $row['nomDoc'] . ' ' . $row['prenom'];




                                        ?>
                                     <option value="<?php echo $id; ?>"><?php echo $var; ?></option>

                                     <?php
                                        }

                                        ?>

                                 </select>
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
    $('#tableService').DataTable({

        "autoWidth": false,


        "fnDrawCallback": function(oSettings) {},
        "ajax": {
            "url": "customer.php",
            "type": "POST",
            "data": {
                method: "list_service"

            },
            error: function(request, textStatus, errorThrown) {
                swal(request.responseJSON.message);
            }
        },

        columns: [{
                "data": "code"
            },
            {
                "data": "nom"
            },
            {
                "data": "batiment"
            },
            {
                "data": "nomDoc"
            },
            {
                "data": null,
                render: function(data, type, row) {

                    return "<button title='Edit' class=' btn btn-icon  icon-left btn-primary btn-edit'><i class='far fa-edit'></i> modifier</button>  <button  title='Delete' class='btn btn-icon icon-left btn-danger btn-hapus' data-toggle='modal'><i class='fas fa-trash-alt'></i>Supprimer</button> ";
                }
            },
        ]


    });


    //le modele d ajjout service
    $("#btn-add").click(function() {
        $("#modal-service").modal("show");
        $('.modal-title').text("Ajouter Service");
        $("#code").val("");
        $("#nom").val("");
        $("#batiment").val("");
        $("#dr").val("");
        $("#crud").val("N");

    });

    //Mdifier service
    $(document).on("click", ".btn-edit", function() {
        var current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        var table = $('#tableService').DataTable();
        var data = table.row(current_row).data();
        $("#id").val(data.ids);
        $("#code").val(data.code);
        $("#nom").val(data.nom);
        $("#batiment").val(data.batiment);
        if ($("input[id=dr]").val() == data.id) {
            $("input[id=dr]").prop("checked", true);


        }

        $("#modal-service").modal("show");
        setTimeout(function() {
            $("#txtname").focus()
        }, 1000);

        $("#crud").val("E");

    });
    // fin edit personnel
    //Ajouter  ou modifier service
    $("#btn-save").click(function() {

        if ($("#crud").val() == 'N') {



            ajoutService($("#code").val(), $("#nom").val(), $("#batiment").val(), $(
                "#dr option:selected").attr("value"));

        } else {

            editService($("#id").val(), $("#code").val(), $("#nom").val(), $("#batiment").val(), $(
                "#dr option:selected").attr("value"));


        }
    });

    //supprimer service

    $(document).on("click", ".btn-hapus", function() {
        let current_row = $(this).parents('tr');
        if (current_row.hasClass('child')) {
            current_row = current_row.prev();
        }
        let table = $('#tableService').DataTable();
        let data = table.row(current_row).data();
        let idcust = data.ids;
        swal({
                title: 'Vous etes sure?',
                text: 'Voulez-vous supprimer cette service!',
                icon: 'error',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    let ajax = {
                        method: "deleteService",
                        id_cust: idcust,
                    }
                    $.ajax({
                        url: "customer.php",
                        type: "POST",
                        data: ajax,
                        success: function(data, textStatus, jqXHR) {

                            $resp = JSON.parse(data);
                            if ($resp['status'] == true) {
                                swal('Success! le service  a été supprimé  avex success!!', {
                                    icon: 'success',
                                });



                                let xtable = $('#tableService').DataTable();
                                xtable.ajax.reload(null, false);
                            } else {
                                swal('Error', 'le service n a pas été supprimé!',
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
    // fin supprim service

    //fonction ajout Service
    function ajoutService(cd, nm, bt, dr) {
        let ajax = {
            method: "new_service",
            cd: cd,
            nm: nm,
            bt: bt,
            dr: dr
        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modal-service").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'le service a eté ajouter avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tableService').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.warning({
                        title: 'Erreur!',
                        message: 'le service n a pas eté ajouter avec success!',
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

    //fonction MODIF Service

    function editService(id, cd, nm, bt, dr) {
        let ajax = {
            method: "editService",
            id: id,
            cd: cd,
            nm: nm,
            bt: bt,
            dr: dr




        }
        $.ajax({
            url: "customer.php",
            type: "POST",
            data: ajax,
            success: function(data, textStatus, jqXHR) {
                $resp = JSON.parse(data);
                if ($resp['status'] == true) {
                    $("#modal-service").modal("hide");
                    iziToast.success({
                        title: 'Success!',
                        message: 'le service a eté modifier avec success!',
                        position: 'topRight'
                    });
                    let xtable = $('#tableService').DataTable();
                    xtable.ajax.reload(null, false);




                } else {
                    iziToast.warning({
                        title: 'Erreur!',
                        message: 'le service n a pas eté modifier avec success!',
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