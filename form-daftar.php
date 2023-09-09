<?php
   include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa Baru</title>
    <!-- Sertakan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Penerimaan Mahasiswa Baru</a>
        </nav>
    </header>

    <!-- Formulir Pendaftaran -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Formulir Pendaftaran Mahasiswa Baru</h2>
                <form action="proses-pendaftaran.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Agama</label>
                        <textarea class="form-control" id="agama" name="agama" rows="1" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    <a href="list-mahasiswa.php" class="btn btn-success">Lihat Daftar Mahasiswa</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap JavaScript dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>