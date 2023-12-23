<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Presensi</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg purple">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Presensi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            </ul>
            </div>
        </div>
    </nav>

    <div class="row d-flex justify-content-center"">
        <div class="card col-12" style="width: 18rem;">
            <h2>Tambah Presensi</h2>

            <form action="<?php echo base_url('presensicontroller/tambahPresensi'); ?>" method="post">
                <div class="mb-3">
                    <label for="id_matkul" class="form-label">ID Matkul</label>
                    <input type="text" class="form-control" name="id_matkul" required>
                </div>
                <div class="mb-3">
                    <label for="tgl_presensi" class="form-label">Tanggal Presensi</label>
                    <input type="date" class="form-control" name="tgl_presensi" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Presensi</button>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
