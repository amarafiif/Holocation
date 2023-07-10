<?php
include '../../../config/databaseConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_users = $_POST['id_users'];
    $id = $_POST['id'];
    $visitor_name = $_POST['visitor_name'];
    $arrival_date = $_POST['arrival_date'];
    $ticket_total = $_POST['ticket_total'];
    $generate_code_ticket = "HOL" . uniqid();

    // Mengambil harga tiket dari destinasi
    $sql_destinasi = "SELECT price FROM destination WHERE id = $id";
    $result_destinasi = $connect->query($sql_destinasi);
    $row_destinasi = $result_destinasi->fetch_assoc();
    $price = $row_destinasi['price'];

    // Menghitung total harga
    $total_harga = $price * $ticket_total;

    // Memasukkan data pemesanan ke dalam tabel
    $sql_pemesanan = "INSERT INTO ticket (id_destination, id_users, ticket_code, visitor_name, arrival_date, ticket_total, price_total) VALUES ('$id', '$id_users', '$generate_code_ticket', '$visitor_name', '$arrival_date', $ticket_total, $total_harga)";
    $result_pemesanan = $connect->query($sql_pemesanan);

    if ($result_pemesanan) {
        echo "Pemesanan tiket berhasil!";

        header('Location:./destinations/index.php');
    } else {
        echo "Terjadi kesalahan saat memesan tiket.";
    }
}
