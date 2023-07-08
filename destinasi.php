<?php
include './config/databaseConnection.php';

// Menampilkan daftar destinasi wisata
$sql = "SELECT * FROM destination";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Harga Tiket: " . $row['price'] . "</p>";

        // Form Pemesanan Tiket
        echo "<form method='POST' action='pesan.php'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='text' name='visitor_name' placeholder='Visitor Name' required><br>";
        echo "<input type='number' name='ticket_total' placeholder='Ticket Total' required><br>";
        echo "<button type='submit'>Pesan Tiket</button>";
        echo "</form>";

        // Form Ulasan Pengguna
        echo "<form method='POST' action='ulasan.php'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='text' name='visitor_name' placeholder='Visitor Name' required><br>";
        echo "<textarea name='review' placeholder='Review' required></textarea><br>";
        echo "<button type='submit'>Kirim Ulasan</button>";
        echo "</form>";
    }
} else {
    echo "Tidak ada destinasi wisata.";
}
