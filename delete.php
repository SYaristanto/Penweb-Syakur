<?php
require './config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Ambil ID dari parameter URL
    $id = $_GET['id'];

    // Lakukan query DELETE ke database
    $deleteQuery = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

    // Redirect ke halaman utama setelah hapus
    header("Location: index.php");
}
?>
