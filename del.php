<?php

include 'partials/_dbconnect.php';

$sno = $_GET['sno'];

$sql = "DELETE FROM auct WHERE sno = '{$sno}'";

$query = mysqli_query($conn, $sql);

header('location:offers.php');

?>