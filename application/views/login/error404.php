<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Diposisi Surat</title>
        <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .bg-primary {
                background-color: #ffffff !important; /* Mengganti warna latar belakang menjadi putih */
            }
            .img-error {
                max-width: 100%;
                height: auto;
                width: 600px; /* Menyesuaikan ukuran gambar */
                display: block;
                margin: 0 auto; /* Menempatkan gambar di tengah */
            }
            .container {
                margin-top: 10%;
            }
            .text-center {
                margin-top: 20px;
            }
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutError">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="<?= base_url('assets/img/error-404.png') ?>" alt="Error 404" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a href="index.html" class="btn btn-primary">
                                        <i class="fas fa-arrow-left me-1"></i>
                                        Return to Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ANNISA</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
