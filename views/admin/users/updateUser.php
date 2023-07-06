<?php

include "../../../config/databaseConnection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$role = $_POST['role'];

$update = mysqli_query($connect, "UPDATE users SET name ='$name', username='$username', email='$email', role='$role' WHERE id='$id'");

header("Location:index.php");