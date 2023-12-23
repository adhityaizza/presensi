<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Presensi</title>
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

    <div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mar-top">Detail Presensi Data</h2>

            <!-- Search form -->
            <div class="card">
            <form action="<?php echo base_url('detailpresensicontroller/updateStatus'); ?>" method="post">
                <label for="nim">Enter NIM:</label>
                <input type="text" name="nim" required>
                <input type="hidden" name="id_presensi" value="<?php echo $detail_presensi[0]->id_presensi; ?>">
                <button type="submit">Search and Update Status</button>
            </form>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detail_presensi as $presensi): ?>
                        <tr>
                            <td><?php echo $presensi->nim; ?></td>
                            <td><?php echo $presensi->nama_mahasiswa; ?></td>
                            <td><?php echo $presensi->waktu; ?></td>
                            <td><?php echo $presensi->status; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
