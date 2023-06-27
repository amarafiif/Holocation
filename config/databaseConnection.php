<?php
$connect = mysqli_connect('localhost', 'root', '', 'db_holocation');

if (mysqli_connect_errno()) {
    echo "Koneksi ke database mengalami masalah: " . mysqli_connect_error();
} else {
    echo "Berhasil terhubung ke Database";
}
