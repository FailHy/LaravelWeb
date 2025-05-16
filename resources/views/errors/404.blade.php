<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="text-center">
        <img src="{{ asset('hannii.jpg') }}" alt="ror" class="img-fluid" style="max-width: 300px;">
        <h1 class="display-1 text-danger fw-bold">404</h1>
        <p class="fs-4 text-muted">Oops! Halaman yang Anda cari tidak ditemukan.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>

</body>
</html>
