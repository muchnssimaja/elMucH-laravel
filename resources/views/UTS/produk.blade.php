<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UTS Laravel - Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<nav class="navbar bg-body-tertiary border">
  <div class="container-fluid px-3">
    <span class="navbar-brand mb-0 h6">UTS Laravel</span>
    <button class="btn btn-outline-secondary rounded-3" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <i class="bi bi-list"></i>
    </button>
  </div>
</nav>

<div class="bg-body-tertiary border-top">
  <div class="container py-3">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="display-6 fw-semibold mb-0">Halaman Produk</h1>
      <a href="{{ url('/uts/form-produk') }}" class="btn btn-primary">Tambah Produk</a>
    </div>

    <div class="table-responsive mt-3">
      <table class="table table-striped table-bordered">
        <thead class="table-primary">
          <tr>
            <th style="width:160px;">Kode Produk</th>
            <th>Nama Produk</th>
            <th style="width:180px;">Jenis Produk</th>
            <th style="width:140px;">Harga</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < count($produk); $i++)
            <tr>
              <td>{{ $produk[$i]['kode'] }}</td>
              <td>{{ $produk[$i]['nama'] }}</td>
              <td>{{ $produk[$i]['jenis'] }}</td>
              <td class="text-end">{{ number_format($produk[$i]['harga'], 0, ',', '.') }}</td>
            </tr>
          @endfor
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarLabel">UTS Laravel</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled mb-4">
      <li class="mb-2"><a href="{{ url('/uts') }}" class="link-body-emphasis text-decoration-none">Home</a></li>
      <li class="mb-2"><a href="{{ url('/uts/produk') }}" class="link-secondary text-decoration-none">Produk</a></li>
    </ul>
    <form class="d-flex gap-2" role="search">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
