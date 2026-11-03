<h1 class="h2">Add Produk</h1>
<h2>Form Add Produk</h2>

<form action="prosesaddproduct.php" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input name="produk" type="text" class="form-control" id="" placeholder="ketikkan nama produk">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input name="harga" type="number" class="form-control" id="" placeholder="ketik harga">
    </div>
    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input name="stok" type="number" class="form-control" id="" placeholder="ketikkan stok">
    </div>
    <div class="mb-3">
        <label class="form-label">Gambar</label>
        <input name="gambar" type="file" class="form-control" id="" accept="image/*">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori" class="form-select" id="">
            <option value="">-- Pilih Kategori --</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
            <option value="peralatan rumah">Peralatan rumah</option>
            <option value="peralatan sekolah">Peralatan sekolah</option>
        </select>
    </div>

    <input class="btn btn-primary" name="simpan" type="submit" value="Simpan">
</form>
