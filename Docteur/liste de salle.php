<?php include 'Docteur_Session.php'; ?>
<?php include 'header.html'; ?>
<?php require_once("conee.php");
$id = $_SESSION['Docteur_id'];
$req = "SELECT * FROM salle join service where salle.code =service.ids and service.directeur like $id";
$ps = $pdo->prepare($req);
$ps->execute();
$ps3 = $pdo->prepare("SELECT * FROM service WHERE service.directeur like '%$id%'");
$ps3->execute();
$ligne3 = $ps3->fetch(PDO::FETCH_ASSOC);
$NBE = $ligne3['ids'];
?>
<!-- Start app main Content -->



<!-- Start app main Content -->
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"></a></li>



            </ol>
        </nav>


        <div class="col-12">
            <div class="card">

                <div class="card-header">

                    <button type="button" data-toggle="modal" class="btn btn btn-primary btn-rounded float-right"
                        id="modal-a" data-target="#exampleModal"><i class="fas fa-plus-circle"></i>AJOUTER
                        SALLE</button>

                </div>



                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tablepatient" class="table  table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Numero
                                    </th>
                                    <th>nomber des lits</th>
                                    <th>Action</th>


                                </tr>



                            <tbody>
                                <?php while ($et = $ps->fetch()) { ?>
                                <tr>

                                    <td>
                                        <?php echo ($et['numero']) ?>
                                    </td>
                                    <td><?php echo ($et['nombreLits']) ?></td>
                                    <td>
                                        <a href="" class="btn btn-icon btn-primary" data-toggle="modal"
                                            data-target="#exampleModal" id="modal-e" data-toggle="tooltip"
                                            data-placement="top" title="modifier salle"><i class='far fa-edit'></i></a>
                                        <a href="detail de salle.php?Mname=<?php echo ($et['id']) ?>"
                                            class="btn btn-icon btn-info btn-d" data-toggle="tooltip"
                                            data-placement="top" title="detail salle"><i class='fas fa-eye'></i></a>
                                        <a onclick="return confirm('Etes vos sur ...?');"
                                            href="suprimerS.php?Mname=<?php echo ($et['id']) ?>"
                                            class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="supprimer salle"><i class='fas fa-trash-alt'></i></a>

                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>

                            </tbody>
                        </table>
                        </body>

                    </div>

                </div>
                <input type="hidden" id="idp">


            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Ajouter une Salle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="" action="ajos.php" method="post">
                        <div class="form-group">
                            <label>NUMERO DE SALLE</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Numero" name="Num">
                            </div>
                            <input type="hidden" class="form-control" placeholder="Numero" name="id"
                                value="<?php echo $NBE; ?>">
                        </div>
                        <div class="form-group">
                            <label>NOMBER DE LITS</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="assignment_late"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="NumLit" name="Numl">
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <input type="hidden" id="crud" value="N">
                            <input type="hidden" id="id">
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 " id="btn-save">Ajouter</button>
                        <button type="button" class="btn btn-danger m-t-15">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#tablesalle').DataTable({
        "info": false,
        "autoWidth": false,
        "fnDrawCallback": function(oSettings) {

        }

    });
    $(document).on("click", ".btn-d", function() {

        window.location.href = "profilePatient.php";

    });
});
</script>
</div>
</div>


</div>
</div>
</div>







<?php include 'footer.html'; ?>
<script type="text/javascript">
$(document).ready(function() {
    $('#tablepatient').DataTable({
        "info": false,
        "autoWidth": false,
        "fnDrawCallback": function(oSettings) {

        }

    });
    $(document).on("click", ".btn-d", function() {

        window.location.href = "profilePatient.php";

    });
});
</script>