<?php

include '../../../config/databaseConnection.php';

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM destination WHERE id='$id'");

header("Location:index.php");
