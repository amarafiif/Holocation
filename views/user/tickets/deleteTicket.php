<?php

include '../../../config/databaseConnection.php';

$id = $_GET['id'];
$sql = mysqli_query($connect, "DELETE FROM ticket WHERE id='$id'");

if ($sql) {
    echo "Delete berhasil pak!";
} else {
    echo "Terjadi kesalahan saat menghapus review.";
}
