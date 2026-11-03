<?php
include 'koneksi.php';

$id    = (int) $_GET['id'];
$query = mysqli_query($dbconnect, "SELECT * FROM produk WHERE id_produk = '$id'");
$data  = mysqli_fetch_assoc($query);

if (!$data) {
    echo "<h2>Data tidak ditemukan</h2>";
    return;
}
?>
<h1 class="h2">Edit Produk</h1>
<h2>Form Edit Produk</h2>

<form action="proseseditproduct.php?id=<?php echo $data['id_produk']; ?>" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input name="produk" type="text" class="form-control" id="" placeholder="ketikkan nama produk" value="<?php echo htmlspecialchars($data['nama_produk']); ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input name="harga" type="number" class="form-control" id="" placeholder="ketik harga" value="<?php echo $data['harga']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input name="stok" type="number" class="form-control" id="" placeholder="ketikkan stok" value="<?php echo $data['stok']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Gambar</label><br>
        <img width="100" class="mb-2" src="gambar/<?php echo $data['gambar_produk']; ?>" alt=""><br>
        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
        <input name="gambar" type="file" class="form-control" id="" accept="image/*">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori" class="form-select" id="">
            <option value="">-- Pilih Kategori --</option>
            <option value="makanan" <?php if ($data['kategori'] == "makanan") echo "selected"; ?>>Makanan</option>
            <option value="minuman" <?php if ($data['kategori'] == "minuman") echo "selected"; ?>>Minuman</option>
            <option value="peralatan rumah" <?php if ($data['kategori'] == "peralatan rumah") echo "selected"; ?>>Peralatan rumah</option>
            <option value="peralatan sekolah" <?php if ($data['kategori'] == "peralatan sekolah") echo "selected"; ?>>Peralatan sekolah</option>
        </select>
    </div>

    <input class="btn btn-primary" name="update" type="submit" value="Update">
    <a href="index.php?pages=produk" class="btn btn-secondary">Batal</a>
</form>
