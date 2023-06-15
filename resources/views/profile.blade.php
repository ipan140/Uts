@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Profile</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <img src="{{ Vite::asset('resources/images/kucing.jpg') }}" alt="" class="rounded mx-auto d-block" style="width: 200px;">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Nama" class="form-label">Nama :</label>
                        <th>Ivano rossi sugiyanto</th>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="JenisKelamin" class="form-label">Jenis kelamin :</label>
                        <th>laki-laki</th>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="TempatLahir" class="form-label">Tempat/Tanggal lahir :</label>
                        <th>Surabaya-20-05-2003</th>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Email" class="form-label">Email :</label>
                        <th>ipanrossi2@gmail.com</th>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="telphone" class="form-label">NoTelphone :</label>
                        <th>085707344523</th>
                    </div>
                </div>
        </div>
    </div>
@endsection