<?php include('Admin_Session.php');
include 'header.html'; ?>
<!-- Start app main Content -->
<div class="main-content">
    <section class="section">


        <h2 class="section-title" style="text-align: left;">Liste des Infirmières </h2>




        <div class="row">
            <div class="col-12">
                <div class="card">


                    <a href="#" class="btn btn-icon btn-lg btn-info" style="text-align: center;">Ajouter
                    </a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped v_center" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Nom</th>
                                        <th>Prénom</th>

                                        <th>Date Naissance</th>
                                        <th>Salaire </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>Mohamed</td>
                                        <td class="align-middle">
                                            Ahmed
                        </div>
                        </td>

                        <td>2018-01-20</td>
                        <td>
                            <div class="badge badge-success">Completed</div>
                        </td>
                        <td><a href="profile.php" class="btn btn-secondary"><i class="fa fa-eye"></i></a> <a href="#"
                                class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a></td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                              <td>Sidi</td>
                            <td class="align-middle">
                                Ahmed
                    </div>
                    </td>

                    <td>2018-04-10</td>
                    <td>
                        <div class="badge badge-info">Todo</div>
                    </td>
                    <td><a href="profile.php" class="btn btn-secondary"><i class="fa fa-eye"></i></a> <a href="#"
                            class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a></td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td> Ahmed</td>
                        <td class="align-middle">
                            Ali
                </div>
                </td>

                <td>2018-01-29</td>
                <td>
                    <div class="badge badge-warning">In Progress</div>
                </td>
                <td><a href="profile.php" class="btn btn-secondary"><i class="fa fa-eye"></i></a> <a href="#"
                        class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a></td>
                </tr>
                <tr>
                    <td>
                        4
                    </td>
                    <td>Brahim</td>
                    <td class="align-middle">
                        Sambe
                    </td>

                    <td>2018-01-16</td>
                    <td>
                        <div class="badge badge-success">Completed</div>
                    </td>
                    <td><a href="profile.php" class="btn btn-secondary"><i class="fa fa-eye"></i></a> <a href="#"
                            class="btn btn-danger"><i class="fa fa-trash-alt"></i> </a></td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
</div>
</div>
</div>
</section>
</div>

<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="js/page/modules-datatables.js"></script>

<?php include 'footer.html'; ?>