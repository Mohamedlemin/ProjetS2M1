<?php
include('Admin_Session.php');
include('Statistique/Nbr.php');
include('Statistique/HommeFemme.php');

include 'header.html';
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['sexe', 'Number'],
        <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "['" . $row["sexe"] . "', " . $row["number"] . "],";
            }
            ?>
    ]);
    var options = {
        title: 'Pourcentage masculin et féminin ',
        is3D: true,
        pieHole: 0.4
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>
<!-- Start app main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Docteurs</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $nbrDoc; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Infirmiers</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $nbrInf; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-user-injured"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Patients</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $nbrMa; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Salle</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $nbrSalle; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="row">

        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Représentation graphique des patients</h4>
                </div>
                <div class="card-body">
                    <div id="" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Représentation graphique des patients</h4>
                </div>
                <div class="card-body">
                    <div id="piechart" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.html'; ?>