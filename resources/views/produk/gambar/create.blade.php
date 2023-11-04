@extends('layouts.app')

@section('produk', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Gambar</h1>
            <form action="{{ url('/admin/produk/'.$produk_id.'/gambar') }}" method="POST" enctype="multipart/form-data" class="form">
                <div class="form-group">
                    <label for="gambar">Gambar Produk</label>
                    <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
                    @error('gambar')
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
