@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark shadow-sm fixed-top" style="background-color: #DD58D6;">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-box"></i> Data Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap ms-auto">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home.index') active @endif"><i class="bi bi-house"></i> Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link @if($currentRouteName == 'barang.index') active @endif"><i class="bi bi-clipboard-data"></i> Data Barang</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('satuan.index') }}" class="nav-link @if($currentRouteName == 'satuan.index') active @endif"><i class="bi bi-clipboard2-data-fill"></i> Data Satuan</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('profile') }}" class="nav-link @if($currentRouteName == 'profile') active @endif"><i class="bi bi-person-circle"></i> Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>