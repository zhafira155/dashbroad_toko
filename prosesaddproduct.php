<?php

if (isset($_POST['simpan'])) {

    include 'koneksi.php';

    $produk   = mysqli_real_escape_string($dbconnect, $_POST['produk']);
    $harga    = (int) $_POST['harga'];
    $stok     = (int) $_POST['stok'];
    $kategori = mysqli_real_escape_string($dbconnect, $_POST['kategori']);

    // upload gambar ke folder gambar/
    $gambar = time() . "_" . basename($_FILES['gambar']['name']);
    move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/" . $gambar);

    $query = "INSERT INTO produk (nama_produk, kategori, gambar_produk, stok, harga)
              VALUES ('$produk', '$kategori', '$gambar', '$stok', '$harga')";

    mysqli_query($dbconnect, $query);

    header("Location: index.php?pages=produk");
}

?>
