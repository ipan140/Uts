<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
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

    <div class="container mt-4">
        <h4 style="text-align: right;">{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>