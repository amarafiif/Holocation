<?php

include '../../../config/databaseConnection.php';

$id = $_POST["id"];
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$location = $_POST['location'];

if ($image != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $image); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['image']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $image;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru);

        // $query = "INSERT INTO destination(name, description, image, location) VALUES('$name', '$description', '$image', '$location')";
        $query = "UPDATE destionation SET name = '$name', description = '$description', image = '$nama_gambar_baru', location = '$location' WHERE id = $id";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($connect)) .
                " - " . mysqli_error($connect);
        } else {
            echo "<script> alert('Data berhasil ditambahkan'); </script>";
            header('Location:index.php');
        }
    }
} else {
    $query = "UPDATE destination SET name = '$name', description = '$description', location = '$location' WHERE id = $id";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($connect)) .
            " - " . mysqli_error($connect);
    } else {
        echo "<script> alert('Data berhasil ditambahkan'); </script>";
        header('Location:index.php');
    }
}
