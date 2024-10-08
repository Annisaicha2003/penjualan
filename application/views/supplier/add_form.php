<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('supplier/save') ?>" method="POST">
                    <div class="mb-3">
                        <label for="nik" class="form-label">Nik</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="telp" class="form-label">Telpon</label>
                        <input type="number" class="form-control" id="telp" name="telp" placeholder="Telpon" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                    </div>

                    <div class="mb-3">
                        <label for="perusahaan" class="form-label">Perusahaan</label>
                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Perusahaan" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_bank" class="form-label">Nama Bank</label>
                        <input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="Nama Bank" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_akun_bank" class="form-label">Nama Akun Bank</label>
                        <input type="text" class="form-control" id="nama_akun_bank" name="nama_akun_bank" placeholder="Nama Akun Bank" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_akun_bank" class="form-label">No Akun Bank</label>
                        <input type="text" class="form-control" id="no_akun_bank" name="no_akun_bank" placeholder="No Akun Bank" required>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>
