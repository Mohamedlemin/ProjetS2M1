<?php
include('Docteur_Session.php');

include 'header.html'; ?>

<!-- Start app main Content -->
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tv"></i></a></li>
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-procedures"></i> Liste Patient </a></li>


            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <button class="btn btn btn-primary btn-rounded btn-add" id="btn-add"><i
                                class="fas fa-plus-circle"></i> Ajouter Patient</button>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tablepatient" class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class='fas fa-wheelchair'></i>
                                        </th>
                                        <th>NUMERO</th>
                                        <th>NOM</th>

                                        <th>SEXE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                            </table>

                        </div>

                    </div>
                    <input type="hidden" id="id">


                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-patient" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Ajouter Visite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_user1">

                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>NOM COMPLET*</label>
                                <input type="text" class="form-control" id="nom" required>

                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>NUMERO*</label>
                                <input type="number" class="form-control" id="num" required>

                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>ADRESSE*</label>
                                <input type="text" class="form-control" id="adr" required>

                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>TELEPHONE*</label>
                                <input type="text" class="form-control" id="tel" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label>SEXE</label>
                            <select class="form-control" id="sexe">
                                <option>Masculin</option>
                                <option>Feminin</option>

                            </select>
                        </div>








                        <div class="form-group">
                            <label>DIAGNOSTIC</label>
                            <textarea class="form-control" id="dg" required></textarea>
                        </div>




                        <input type="hidden" id="crud">
                        <input type="hidden" id="idv">

                        <input type="hidden" id="idd" value="<?php echo $id; ?>">




                        <button type="button" class="btn btn-outline-primary m-t-15 waves-effect"
                            id="btn-save">Ajouter</button>
                        <input type="reset" class="btn btn-outline-danger m-t-15 waves-effect" value="Annuler">
                    </form>
                </div>
            </div>
        </div>
    </div>








</div>





<?php include 'footer.html'; ?>
<script type="text/javascript">
$(document).ready(function() {

    $('#tablepatient').DataTable({
        "autoWidth": false,


        "fnDrawCallback": function(oSettings) {},
        "ajax": {
            "url": "customer.php",
            "type": "POST",
            "data": {
                method: "list_patient"

            },
            error: function(request, textStatus, errorThrown) {
                swal(request.responseJSON.message);
            }
        },

        columns: [{
                "data": null,
                render: function(data, type, full, meta) {
                    return "<i class='fas fa-wheelchair'></i>"
                }
            },
            {
                "data": "numero"
            },
            {
                "data": "nom"
            },
            {
                "data": "sexe"
            },

            {
                "data": null,
                render: function(data, type, row) {

                    return "<button  class='btn btn-icon btn-primary btn-edit'  title='modifier patient'><i class='far fa-edit'></i></button> <button  class='btn btn-icon btn-info btn-d'   title='detail patient'><i class='fas fa-eye'></i></button> <button  class='btn btn-icon btn-warning' data-toggle='tooltip' data-placement='top' title='supprimer patient'><i class='fas fa-trash-alt'></i></button> <button  class='btn btn-icon btn-danger' data-toggle='tooltip' data-placement='top' title='transfer patient'><i class='fas fa-times-circle'></i></button> ";
                }
            },

        ]

    });
    //le modele d ajjout patient
    $("#btn-add").click(function() {
        $("#modal-patient").modal("show");
        $('.modal-title').text("Ajouter patient");


    });



    $(document).on("click", ".btn-d", function() {

        window.location.href = "profilePatient.php";

    });

});
</script>