<!DOCTYPE html>
<html lang="en">
<!--conexion a la base de donne-->
<?php /*require_once("conee.php");
$req = "SELECT * FROM malade join hospitaliser where malade.numero=hospitaliser.numeromalade";
$ps = $pdo->prepare($req);
$ps->execute();
*/ ?>
<!-- Start app main Content -->
<!-- modules-datatables.html  Tue, 07 Jan 2020 03:38:57 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Modules &rsaquo; DataTables &mdash; CodiePie</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">


            <!-- Start app top navbar -->


            <!-- Start main left sidebar menu -->

            <!-- Start app main Content -->
            <?php include 'header.html'; ?>
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Patients</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Accueil</a></div>
                            <div class="breadcrumb-item">Liste des patients</div>
                        </div>
                    </div>

                    <div class="section-body">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview"> <i class="icon-user"></i>icon-user </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped v_center" id="table-1">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            NUM
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Prenom</th>
                                                        <th>adresse</th>
                                                        <th>telphone</th>
                                                        <th>SALLE</th>
                                                        <th>NUM-lit</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--
                                            <?php // while ($et=$ps->fetch()){ 
                                            ?>
                                                <tr>
                                                <td>
                                                <?php //echo($et['numero']) 
                                                ?>
                                                </td>
                                                <td><?php //echo($et['nom']) 
                                                    ?></td>
                                                <td><?php //echo($et['prenom']) 
                                                    ?></td>
                                                <td><?php //echo($et['adresse']) 
                                                    ?></td>
	                                            <td><?php //echo($et['tel']) 
                                                    ?></td>
                                                <td>A<?php //echo($et['idsalle']) 
                                                        ?></td>
                                                <td>L<?php //echo($et['numlit']) 
                                                        ?></td>
                                                
                                                </tr>
                                                          <?php //}
                                                            ?> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Start app Footer part -->
                    <?php include 'footer.html'; ?>
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="assets/bundles/lib.vendor.bundle.js"></script>
        <script src="js/CodiePie.js"></script>

        <!-- JS Libraies -->
        <script src="assets/modules/datatables/datatables.min.js"></script>
        <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
        <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

        <!-- Page Specific JS File -->
        <script src="js/page/modules-datatables.js"></script>

        <!-- Template JS File -->
        <script src="js/scripts.js"></script>
        <script src="js/custom.js"></script>
</body>

<!-- modules-datatables.html  Tue, 07 Jan 2020 03:39:02 GMT -->

</html>