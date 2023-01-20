<?php

include 'partials/_dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM imgupload WHERE id = '{$id}'";

$query = mysqli_query($conn, $sql);

header('location:view.php');

?>