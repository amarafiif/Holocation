<?php
include './config/databaseConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $visitor_name = $_POST['visitor_name'];
    $ticket_total = $_POST['ticket_total'];

    // Mengambil harga tiket dari destinasi
    $sql_destinasi = "SELECT price FROM destination WHERE id = $id";
    $result_destinasi = $connect->query($sql_destinasi);
    $row_destinasi = $result_destinasi->fetch_assoc();
    $price = $row_destinasi['price'];

    // Menghitung total harga
    $total_harga = $price * $ticket_total;

    // Memasukkan data pemesanan ke dalam tabel
    $sql_pemesanan = "INSERT INTO booking (id_destination, visitor_name, ticket_total, price_total) VALUES ($id, '$visitor_name', $ticket_total, $total_harga)";
    $result_pemesanan = $connect->query($sql_pemesanan);

    if ($result_pemesanan) {
        echo "Pemesanan tiket berhasil!";
    } else {
        echo "Terjadi kesalahan saat memesan tiket.";
    }
}
?>
