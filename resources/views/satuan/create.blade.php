@extends('layouts.app')
@section('content')
<br><br><br>
    <div class="container-sm mt-5">
        <form action="{{ route('satuan.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Tambah Data</h4>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                            <label for="kode_satuan" class="form-label">Kode satuan</label>
                            <input class="form-control @error('kode_satuan') is-invalid @enderror" type="text" name="kode_satuan" id="kode_satuan" value="{{ old('kode_satuan') }}" placeholder="Enter Kode satuan">
                                @error('kode_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_satuan" class="form-label">Nama satuan</label>
                            <input class="form-control @error('nama_satuan') is-invalid @enderror" type="text" name="nama_satuan" id="nama_satuan" value="{{ old('nama_satuan') }}" placeholder="Enter Nama satuan">
                                @error('nama_satuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('satuan.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>