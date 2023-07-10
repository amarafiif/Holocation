<?php

include '../../../config/databaseConnection.php';

$id = $_POST["id"];
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];

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
        $query = "UPDATE article SET title = '$title', content = '$content', image = '$nama_gambar_baru' WHERE id = $id";
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
    $query = "UPDATE article SET title = '$title', content = '$content', image = '$nama_gambar_baru' WHERE id = $id";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($connect)) .
            " - " . mysqli_error($connect);
    } else {
        echo "<script> alert('Data berhasil ditambahkan'); </script>";
        header('Location:index.php');
    }
}
