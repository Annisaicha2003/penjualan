<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('barang/edit') ?>" method="POST">
                    <div class="mb-3">
                        <label for="barcode" class="form-label">Barcode</label>
                        <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="Harga Jual" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="Harga Beli" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="FKkategori_id" class="form-label">Kategori</label>
                        <input type="number" class="form-control" id="FKkategori_id" name="FKkategori_id" placeholder="Kategori" required>
                    </div>

                    <div class="mb-3">
                        <label for="FKsatuan_id" class="form-label">Satuan</label>
                        <input type="number" class="form-control" id="FKsatuan_id" name="FKsatuan_id" placeholder="Satuan" required>
                    </div>

                    <div class="mb-3">
                        <label for="FKuser_id" class="form-label">User</label>
                        <input type="number" class="form-control" id="FKuser_id" name="FKuser_id" placeholder="User" required>
                    </div>

                    <div class="mb-3">
                        <label for="FKsuplier_id" class="form-label">Supplier</label>
                        <input type="number" class="form-control" id="FKsuplier_id" name="FKsuplier_id" placeholder="Supplier" required>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>
