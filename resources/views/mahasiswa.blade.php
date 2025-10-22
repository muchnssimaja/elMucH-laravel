<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('image/logo-uinsu.png') }}" alt="Logo UINSU" width="40" height="40">
            <span>UIN Sumatera Utara</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-4">
    <h1 class="display-6 mb-4 text-center">Halaman Mahasiswa</h1>

    <div class="row g-4">
        <div class="col-lg-8">
            <h5 class="mb-3">Data Mahasiswa</h5>
            <div class="table-responsive">
                <table class="table table-dark table-striped" id="tabelMahasiswa">
                    <thead>
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th style="width: 180px;">NIM</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-4">
            <h5 class="mb-3">Form Tambah Mahasiswa</h5>
            <form id="formMahasiswa" class="card card-body shadow-sm">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" id="nim" class="form-control" placeholder="Masukkan NIM">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa">
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>

<footer class="text-center py-3 mt-4 border-top">
    <img src="{{ asset('image/logo-uinsu.png') }}" alt="Logo UINSU" width="35" class="mb-1">
    <p class="mb-0 text-muted">&copy; 2025 UIN Sumatera Utara</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        let nomor = 1;
        $('#formMahasiswa').submit(function(e) {
            e.preventDefault();
            let nim = $('#nim').val().trim();
            let nama = $('#nama').val().trim();
            if (nim === '' || nama === '') {
                alert('NIM dan Nama harus diisi!');
                return;
            }
            let baris = `
                <tr>
                    <td>${nomor}</td>
                    <td>${nim}</td>
                    <td>${nama}</td>
                </tr>
            `;
            $('#tabelMahasiswa tbody').append(baris);
            nomor++;
            $('#nim').val('');
            $('#nama').val('');
        });
    });
</script>

</body>
</html>
