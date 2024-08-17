<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('kustomer/save') ?>" method="POST">
                    <div class="mb-3">
                        <label for="nik" class="form-label">Nik</label>
                        <input type="text" class="form-control" name="nik" placeholder="Nik" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="telp" class="form-label">Telpon</label>
                        <input type="number" class="form-control" name="telp" placeholder="Telpon" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>
