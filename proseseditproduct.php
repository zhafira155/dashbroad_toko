<?php

if (isset($_POST['update'])) {

    $id = (int) $_GET['id'];
    include 'koneksi.php';

    $produk   = mysqli_real_escape_string($dbconnect, $_POST['produk']);
    $harga    = (int) $_POST['harga'];
    $stok     = (int) $_POST['stok'];
    $kategori = mysqli_real_escape_string($dbconnect, $_POST['kategori']);

    if ($_FILES['gambar']['name'] != "") {
        $cek  = mysqli_query($dbconnect, "SELECT gambar_produk FROM produk WHERE id_produk = '$id'");
        $lama = mysqli_fetch_assoc($cek);

        $gambar = time() . "_" . basename($_FILES['gambar']['name']);
        move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/" . $gambar);

        if ($lama && $lama['gambar_produk'] != "" && file_exists("gambar/" . $lama['gambar_produk'])) {
            unlink("gambar/" . $lama['gambar_produk']);
        }

        $query = "UPDATE produk SET
                    nama_produk   = '$produk',
                    kategori      = '$kategori',
                    gambar_produk = '$gambar',
                    stok          = '$stok',
                    harga         = '$harga'
                  WHERE id_produk = '$id'";
    } else {
       
        $query = "UPDATE produk SET
                    nama_produk = '$produk',
                    kategori    = '$kategori',
                    stok        = '$stok',
                    harga       = '$harga'
                  WHERE id_produk = '$id'";
    }

    mysqli_query($dbconnect, $query);

    header("Location: index.php?pages=produk");
}

?>
