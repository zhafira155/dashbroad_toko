<h1 class="h2">Produk</h1>

<h2>Halaman Produk</h2>
<div class="table-responsive small">

    <a href="index.php?pages=addproduct" class="btn btn-success">Add Produk</a>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">ID</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
<?php
include 'koneksi.php';
$querytampil     = "SELECT * FROM produk";
$tampilkandata   = mysqli_query($dbconnect, $querytampil);
$no = 1;

foreach ($tampilkandata as $tampil) {
?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampil['id_produk']; ?></td>
                <td><?php echo $tampil['nama_produk']; ?></td>
                <td><?php echo $tampil['harga']; ?></td>
                <td><?php echo $tampil['stok']; ?></td>
                <td><img width="100" src="gambar/<?php echo $tampil['gambar_produk']; ?>" alt=""></td>
                <td><?php echo $tampil['kategori']; ?></td>
                <td>
                    <a href="index.php?pages=editproduct&id=<?php echo $tampil['id_produk']; ?>" class="btn btn-info">edit</a>

                    <form class="d-inline" action="proseshapus.php?id=<?php echo $tampil['id_produk']; ?>" method="post">
                        <input class="btn btn-danger" name="hapus" type="submit" value="hapus" onclick="return confirm('Apakah kamu yakin menghapus data?');">
                    </form>
                </td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</div>
