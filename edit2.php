<?php
require './config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");

    if (mysqli_num_rows($product) == 1) {
        $row = mysqli_fetch_assoc($product);
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <h1>Ubah data produk</h1>
            <a href="show.php">Lihat data produk</a>
            <form action="./backend/edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <input type="text" name="name" id="name" value="<?= $row['name']; ?>">
                <input type="number" name="price" id="price" value="<?= $row['price']; ?>">
                <input type="file" name="image" id="image" value="<?= $row['image']; ?>">
                <input type="submit" value="simpan" name="submit">
            </form>
            <?php
    } else {
        echo "Produk tidak ditemukan";
    }
} else {
    echo "ID produk tidak valid";
}

?>
</body>

</html>