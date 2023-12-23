<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
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

    <div class="row">
        <div class="col-3 side">
            <a href="<?php echo base_url()?>MatkulController/tambahMatkulForm"><button type="button" class="btn btn-secondary mar-top">tambah matkul</button></a>
            <ul class="list-group list-group-flush">
                <?php foreach ($simple as $dt_mat) : ?>
                    <li class="list-group-item"><?php echo $dt_mat['nama_matkul']; ?></li>
                <?php endforeach;?>
                </ul>
        </div>

        <div class="col-9">
        <a href="<?php echo base_url()?>PresensiController/tambahPresensiForm"><button type="button" class="btn btn-secondary mar-top">tambah presensi</button></a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama Matkul</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th> <!-- Added this column for buttons -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pres as $dt_pres) : ?>
                    <tr>
                        <th><?php echo $dt_pres['nama_matkul']; ?></th>
                        <th><?php echo $dt_pres['tgl_presensi']; ?></th>
                        <th>
                            <!-- Added button to view detail for each presensi -->
                            <a href="<?php echo base_url('detailpresensicontroller/view/'.$dt_pres['id_presensi']); ?>" class="btn btn-primary">Detail Presensi</a>
                        </th>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
