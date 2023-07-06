<?php

session_start();
include 'databaseConnection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' and password='$password'");
$check = mysqli_num_rows($login);

if ($check > 0) {

    $data = mysqli_fetch_assoc($login);

    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $data['email'];

    if ($data['role'] == 'admin') {
        $_SESSION['role'] = 'admin';

        header("location:/views/admin/index.php");
    } else if ($data['role'] == 'user') {
        $_SESSION['role'] = 'user';

        header("location:/views/user/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
}
