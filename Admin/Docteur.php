<?php include('Admin_Session.php');
include 'header.html'; ?>
<!-- Start app main Content -->
<div class="main-content">
    <section class="section">


        <h2 class="section-title" style="text-align: left;">Liste des Docteurs</h2>




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <button href="#" class="btn btn btn-warning btn-rounded float-right" id="btn-add"> AJOUTER</button>



                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped v_center" id="tableDoc">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Nom</th>
                                        <th>Numéro </th>
                                        <th>Adresse </th>
                                        <th>Téléphone </th>
                                        <th>Spécialité </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade" id="modal-service" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
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
                                <label>Nom</label>
                                <input type="text" class="form-control" id="Nom" name="Nom" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Numéro </label>
                                <input type="email" class="form-control" id="Numéro" name="Numéro" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Adresse </label>
                                <input type="text" id="Adresse" name="Adresse" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Spécialiste </label>
                                <input type="text" id="speciealite" name="speciealite" class="form-control">

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Téléphone </label>
                                <input type="text" id="tel" name="tel" class="form-control">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Username </label>
                                <input type="text" id="Username" name="Username" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mot de passe </label>
                                <input type="text" id="password" name="password" class="form-control">
                            </div>


                        </div>


                        <button type="button" class="btn btn-outline-primary m-t-15 waves-effect"
                            id="btn-save">Enregistre </button>
                        <input type="reset" value="Annuler" class="btn btn-outline-danger m-t-15 waves-effect">
                </div>
            </div>
        </div>
    </div>





    <?php include 'footer.html'; ?>
    <!-- js et ajax part -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#tableDoc').DataTable({

            "autoWidth": false,


            "fnDrawCallback": function(oSettings) {},
            "ajax": {
                "url": "customer.php",
                "type": "POST",
                "data": {
                    method: "list_Docteur"

                },
                error: function(request, textStatus, errorThrown) {
                    swal(request.responseJSON.message);
                }
            },

            columns: [{
                    "data": "id"
                },
                {
                    "data": "nomDoc"
                },
                {
                    "data": "Numero"
                },
                {
                    "data": "adresse"
                },
                {
                    "data": "tel"
                },
                {
                    "data": "speciealite"
                },

                {
                    "data": null,
                    render: function(data, type, row) {
                        return "<button title='Edit' class=' btn btn-icon  icon-left btn-primary btn-edit'><i class='far fa-edit'></i> modifier</button>  <button  title='Delete' class='btn btn-icon icon-left btn-danger btn-hapus' data-toggle='modal'><i class='fas fa-trash-alt'></i>Supprimer</button> ";
                    }
                },
            ]

        });

        //Modele d'insertion docteur
        $("#btn-add").click(function() {
            $("#modal-service").modal("show");
            $('.modal-title').text("Ajouter Docteur");
            $("#Nom").val("");
            $("#Numéro").val("");
            $("#Adresse").val("");
            $("#tel").val("");
            $("#speciealite").val("");
            $("#Username").val("");
            $("#password").val("");
            $("#crud").val("N");

        });

        //Mdifier Docteur
        $(document).on("click", ".btn-edit", function() {
            var current_row = $(this).parents('tr');
            if (current_row.hasClass('child')) {
                current_row = current_row.prev();
            }
            var table = $('#tableDoc').DataTable();
            var data = table.row(current_row).data();
            $("#id").val(data.id);
            $("#Nom").val(data.nomDoc);
            $("#Numéro").val(data.Numero);
            $("#Adresse").val(data.adresse);
            $("#speciealite").val(data.speciealite);
            $("#tel").val(data.tel);
            $("#Username").val(data.username);
            $("#password").val(data.password);

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
        //Ajouter  ou modifier Docrteur
        $("#btn-save").click(function() {

            if ($("#crud").val() == 'N') {



                ajoutDocteur($("#Nom").val(), $("#Numéro").val(), $("#Adresse").val(), $("#tel").val(),
                    $("#speciealite").val(), $("#Username").val(), $("#password").val());


            } else {

                editDocteur($("#id").val(), $("#Nom").val(), $("#Numéro").val(), $("#Adresse").val(),

                    $("#tel").val(), $("#speciealite").val(), $("#Username").val(), $("#password")
                    .val());


            }
        });

        //supprimer service

        $(document).on("click", ".btn-hapus", function() {
            let current_row = $(this).parents('tr');
            if (current_row.hasClass('child')) {
                current_row = current_row.prev();
            }
            let table = $('#tableDoc').DataTable();
            let data = table.row(current_row).data();
            let idcust = data.id;
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
                            method: "deleteDocteur",
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



                                    let xtable = $('#tableDoc').DataTable();
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
        function ajoutDocteur(Nom, Numéro, Adresse, tel, speciealite, Username, password) {
            let ajax = {
                method: "new_Docteur",
                Nom: Nom,
                Numéro: Numéro,
                Adresse: Adresse,
                tel: tel,
                speciealite: speciealite,
                Username: Username,
                password: password
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
                        let xtable = $('#tableDoc').DataTable();
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

        function editDocteur(id, Nom, Numéro, Adresse, tel, speciealite, Username, password) {
            let ajax = {
                method: "editDocteur",
                id: id,
                Nom: Nom,
                Numéro: Numéro,
                Adresse: Adresse,
                tel: tel,
                speciealite: speciealite,
                Username: Username,
                password: password




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
                        let xtable = $('#tableDoc').DataTable();
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