<?php

include '../../../config/databaseConnection.php';

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM users WHERE id='$id'");

header("Location:useManagement.php");

?>