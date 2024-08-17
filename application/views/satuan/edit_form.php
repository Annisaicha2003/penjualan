<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('satuan') ?>">Satuan</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('satuan/edit') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $satuan->id; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="<?= $satuan->name; ?>" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="diskripsi" class="form-label">Diskripsi</label>
                        <input type="text" class="form-control" diskripsi="diskripsi" value="<?= $satuan->diskripsi; ?>" placeholder="Diskripsi" required>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>