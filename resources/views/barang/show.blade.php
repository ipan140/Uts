<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $halamanPage }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-box"></i> Data Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap ms-auto">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active"><i class="bi bi-house"></i> Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link "><i class="bi bi-clipboard-data"></i> Data Barang</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('profile') }}" class="nav-link "><i class="bi bi-person-circle"></i> Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kode_barang" class="form-label">kode barang</label>
                        <h5>{{ $barangs->kode_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama_barang" class="form-label">Last Name</label>
                        <h5>{{ $barangs->nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga_barang" class="form-label">harga_barang</label>
                        <h5>{{ $barangs->harga_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi_barang" class="form-label">deskripsi_barang</label>
                        <h5>{{ $barangs->deskripsi_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Position</label>
                        <h5>{{ $barangs->Satuan->nama_satuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>