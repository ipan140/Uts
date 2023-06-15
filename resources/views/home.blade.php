@extends('layouts.app')
@section('content')
<br><br><br>
    <div class="container mt-4">
        <h4 style="text-align: center;">{{ $halamanPage }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <div class="container text-center ms-5">
            <div class="row">
                <div class="col">
                <div class="card shadow-sm" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/images/kucing2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Kucing British Shorthair adalah ras kucing yang berasal dari Britania Raya. Mereka memiliki tubuh yang kuat, kepala bulat, mata besar, dan bulu pendek, padat, serta tebal. Kucing ini memiliki sifat yang tenang, santai, dan ramah terhadap keluarga. Perawatan bulu mereka cukup mudah, dan mereka cenderung sehat secara umum. Penting untuk mencari penjual atau peternak yang bertanggung jawab sebelum memutuskan untuk memelihara kucing British Shorthair.</p>
                </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/images/kucing3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Kucing Anggora adalah ras kucing dengan bulu panjang, halus, dan indah. Mereka berasal dari Turki dan memiliki kepala segitiga, mata besar, dan telinga yang berukuran sedang hingga besar. Anggora cenderung cerdas, lincah, dan aktif. Perawatan bulu mereka membutuhkan menyikat harian dan perawatan tambahan. Kucing Anggora umumnya sehat, tetapi rentan terhadap masalah seperti batu ginjal. Jika Anda memilih untuk memelihara Anggora, pastikan Anda siap untuk memberikan perawatan yang diperlukan dan menciptakan lingkungan yang sesuai.</p>
                </div>
                </div>
                </div>
                <div class="col">
                <div class="card shadow-sm" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/images/kucing4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Kucing Persia adalah ras kucing yang memiliki bulu panjang, wajah bulat, dan hidung pesek. Mereka cenderung tenang, penyayang, dan cocok untuk kehidupan dalam ruangan. Perawatan bulu mereka membutuhkan penyisiran harian dan perhatian khusus terhadap kesehatan mata. Kucing Persia rentan terhadap masalah pernapasan dan masalah mata. Jika Anda memelihara kucing Persia, penting untuk memberikan perawatan yang memadai dan lingkungan yang sesuai untuk kenyamanan mereka.</p>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection