<?php

include '../../../config/databaseConnection.php';

$name = $_POST['name'];
$price = $_POST['price'];
$complete_address = $_POST['complete_address'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$location = $_POST['location'];

if ($image != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $image); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['image']['tmp_name'];
    $angka_acak     = time();
    $nama_gambar_baru = $angka_acak . '.' . $ekstensi;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru);

        $query = "INSERT INTO destination(name, description, price,  image, location, complete_address) VALUES('$name', '$description', '$price', '$nama_gambar_baru', '$location', '$complete_address')";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($connect)) .
                " - " . mysqli_error($connect);
        } else {
            echo "<script> alert('Data berhasil ditambahkan'); </script>";
            header('Location:index.php');
        }
    }
}
