<?php

include "../../../config/databaseConnection.php";

$id = $_POST['id'];
$visitor_name = $_POST['visitor_name'];
$review = $_POST['review'];


$update = mysqli_query($connect, "UPDATE review SET visitor_name ='$visitor_name', review='$review' WHERE id='$id'");

if ($update) {
    echo "Update berhasil pak!";
} else {
    echo "Terjadi kesalahan saat menghapus review.";
}
