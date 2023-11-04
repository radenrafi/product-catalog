@extends('layouts.app')

@section('title', 'Tambah Produk')
@section('produk', 'active')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Produk</h1>
                <form action="{{ url('/admin/produk') }}" method="POST" enctype="multipart/form-data" class="form">
                    <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            id="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="kategori">Kategori</label>
                                <select class="form-select" name="kategori" id="kategori">
                                    <option selected>-- Pilih Kategori --</option>
                                    <option value="Akrilik" {{ old('kategori') == 'Akrilik' ? 'selected' : '' }}>
                                        Akrilik
                                    </option>
                                    <option value="Buket" {{ old('kategori') == 'Buket' ? 'selected' : '' }}>
                                        Buket
                                    </option>
                                    <option value="Simple Frame" {{ old('kategori') == 'Simple Frame' ? 'selected' : '' }}>
                                        Simple Frame
                                    </option>
                                    <option value="3D Frame" {{ old('kategori') == '3D Frame' ? 'selected' : '' }}>
                                        3D Frame
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" id="harga" value="{{ old('harga') }}">
                                @error('harga')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="link_toko">Link Toko Online Produk</label>
                        <input type="url" class="form-control @error('link_toko') is-invalid @enderror" name="link_toko"
                            id="link_toko" value="{{ old('link_toko') }}">
                        @error('link_toko')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="link_wa">Link WhatsApp Produk</label>
                        <input type="url" class="form-control @error('link_wa') is-invalid @enderror" name="link_wa"
                            id="link_wa" value="{{ old('link_wa') }}">
                        @error('link_wa')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('isi') }}</textarea>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" value="submit">Tambah</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
