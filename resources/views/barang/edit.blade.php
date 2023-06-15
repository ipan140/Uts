@extends('layouts.app')
@section('content')
<br><br><br>
    <div class="container-sm mt-5">
        <form action="{{ route('barang.update',['barang'=>$barang->id]) }}" method="POST">
        <input type="hidden" name="barang_id" id="barang_id" value="{{ $barang->barang_id }}">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                               {{ $error }}
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Tambah Data</h4>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang" value="{{ $errors->any() ? old('kode_barang') : $barang->kode_barang }}" placeholder="Enter kode barang">
                                @error('kode_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" name="nama_barang" id="nama_barang" value="{{ $errors->any() ? old('nama_barang') : $barang->nama_barang }}" placeholder="Enter nama barang">
                                @error('nama_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text" name="harga_barang" id="harga_barang" value="{{ $errors->any() ? old('harga_barang') : $barang->harga_barang }}" placeholder="Enter harga barang">
                                @error('harga_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                        <label for="deskripsi_barang" class="form-label">Deskripsi barang</label>
                        <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" id="deskripsi_barang" rows="3" name="deskripsi_barang" value="" placeholder="Enter Deskripsi barang">{{ $errors->any() ? old('deskripsi_barang') : $barang->deskripsi_barang }}</textarea>
                            @error('deskripsi_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <select name="satuan" id="satuan" class="form-select">
                            @foreach ($Satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                            @endforeach
                        </select>
                        @error('satuan')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection