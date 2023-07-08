<?php
include './config/databaseConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $visitor_name = $_POST['visitor_name'];
    $review = $_POST['review'];

    // Memasukkan data ulasan ke dalam tabel
    $sql_ulasan = "INSERT INTO review (id_destination, visitor_name, review) VALUES ($id, '$visitor_name', '$review')";
    $result_ulasan = $connect->query($sql_ulasan);

    if ($result_ulasan) {
        echo "Ulasan terkirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim ulasan.";
    }
}
