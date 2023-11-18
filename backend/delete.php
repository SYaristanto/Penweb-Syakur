
// require './../config/db.php';


// // Periksa apakah formulir delete telah dikirim
// if(isset($_POST['delete'])) {
//     global $db_connect;

//     $id = $_POST['id'];

//     // Ambil jalur file gambar dari database
//     $result = mysqli_query($db_connect, "SELECT image FROM products WHERE id=$id");
//     $row = mysqli_fetch_assoc($result);
//     $imagePath = $row['image'];

//     // Hapus rekaman dari database
//     $deleteQuery = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

//     if($deleteQuery) {
//         // Hapus file gambar terkait dari server
//         if(file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
//             unlink($_SERVER['DOCUMENT_ROOT'] . $imagePath);
//         }
//         echo "berhasil delete";
//     } else {
//         echo "gagal delete";
//     }
// }


<?php
require './../config/db.php';

if (isset($_GET['id'])) {
    // Ambil ID dari parameter URL
    $id = $_GET['id'];

    // Lakukan query DELETE ke database
    $deleteQuery = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

    // Redirect ke halaman utama setelah hapus
    header("Location: ./../show.php");
    exit();
} else{
    header("Location: ./../show.php");
    exit();
}
?>
