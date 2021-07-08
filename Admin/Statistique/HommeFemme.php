<?php
include('../Admin_Session.php');
$query = "SELECT sexe, count(*) as number FROM malade GROUP BY sexe";
$result = mysqli_query($con, $query);