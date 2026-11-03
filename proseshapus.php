<?php

if (isset($_POST['hapus'])) {

    $id = (int) $_GET['id'];
    include 'koneksi.php';

    $cek  = mysqli_query($dbconnect, "SELECT gambar_produk FROM produk WHERE id_produk = '$id'");
    $data = mysqli_fetch_assoc($cek);

    $query = "DELETE FROM produk WHERE id_produk = '$id'";
    mysqli_query($dbconnect, $query);

    if ($data && $data['gambar_produk'] != "" && file_exists("gambar/" . $data['gambar_produk'])) {
        unlink("gambar/" . $data['gambar_produk']);
    }

    header("Location: index.php?pages=produk");
}

?>
