@extends('layouts.app')
@section('content')
<br><br><br>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $halamanPage }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('satuan.create') }}" class="btn btn-dark">Create Datasatuan</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Satuan</th>
                        <th>Nama Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                @foreach ($satuans as $satuan)
                <td>{{ $satuan->kode_satuan }}</td>
                <td>{{ $satuan->nama_satuan }}</td>
                <td>
                    <div class="d-flex">
                    <a href="{{ route('satuan.show', ['satuan' => $satuan->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                    <div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection