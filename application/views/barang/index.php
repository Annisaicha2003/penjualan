<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?= site_url('barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success') ?>
            </div>
            <?php endif; ?>
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="<?= site_url('barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                <button type="button" class="btn btn-primary" onclick="window.open('<?= site_url('barang/baranglap') ?>', '_blank')">
                    <i class="fas fa-file"></i> Laporan
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="datakelas" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Barcode</th>
                                <th>Nama</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Satuan</th>
                                <th>User</th>
                                <th>Supplier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1; 
                            foreach ($barang as $item): ?>
                            <tr>
                                <td class="text-center"><?= $no ?></td>
                                <td><?= $item->barcode ?></td>
                                <td><?= $item->barang_name ?></td>
                                <td><?= $item->harga_jual ?></td>
                                <td><?= $item->harga_beli ?></td>
                                <td><?= $item->stok ?></td>
                                <td><?= $item->kategori_name ?></td>
                                <td><?= $item->satuan_name ?></td>
                                <td><?= $item->FKuser_id ?></td>
                                <td><?= $item->FKsuplier_id  ?></td>
                                <td class="text-center">
                                    <div>
                                        <a href="<?= base_url('barang/getedit/'.$item->id) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('barang/delete/'.$item->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin menghapus data barang ini?');"><i class="fas fa-trash"></i> Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <?php 
                            $no++; 
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>
