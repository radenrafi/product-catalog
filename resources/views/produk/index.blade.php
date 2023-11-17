@extends('layouts.app')

@section('title', 'Produk')
@section('produk', 'active')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if (session()->has('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row mb-4">
                    <div class="col">
                        <h1>Produk</h1>
                    </div>
                    <div class="col d-md-flex justify-content-end">
                        <a class="btn btn-primary mb-3" href="{{ url('/admin/produk/create') }}" role="button">Create</a>
                    </div>
                </div>

                <div style="overflow-x: auto; width: 80vw;
                     box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 5px rgba(0, 0, 0, 0.1) inset;">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Link Toko</th>
                                <th>Link WhatsApp</th>
                                <th>Klik</th>
                                <th>Tanggal Diedit</th>
                                <th>Gambar</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody >
                            @forelse ($produks as $key => $produk)
                                <?php $produkNumber = ($produks->currentPage() - 1) * $produks->perPage() + $key + 1; ?>
                                <tr>
                                    <th>{{ $produkNumber }}</th>
                                    <th>
                                        <a href="{{ url('/admin/produk/' . $produk->id) }}">{{ $produk->nama }}</a>
                                    </th>
                                    <th>{{ $produk->kategori }}</th>
                                    <th>{{ $produk->harga }}</th>
                                    <th>
                                        <a href="{{ $produk->link_toko }}" target="blank">{{ $produk->link_toko }}</a>
                                    </th>
                                    <th>
                                        <a href="{{ $produk->link_wa }}" target="blank">{{ $produk->link_wa }}</a>
                                    </th>
                                    <th>{{ $produk->klik }}</th>
                                    <th>{{ $produk->updated_at }}</th>
                                    <th>
                                        <a class="btn btn-primary mt-3"
                                            href="{{ url('/admin/produk/' . $produk->id . '/gambar/create') }}"
                                            role="button">Tambah Gambar</a>
                                    </th>
                                    <th>
                                        <a href="{{ url('/admin/produk/' . $produk->id . '/edit') }}"
                                            class="btn btn-primary justify-items-center" role="button">Edit</a>
                                    </th>
                                    <th>
                                        <form action="{{ url('/admin/produk/' . $produk->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-danger justify-items-center">Hapus</button>
                                        </form>
                                    </th>
                                </tr>
                            @empty
                                <div class="alert alert-success" role="alert">
                                    Tidak ada data
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center" style="gap: 1em">
                        <a class="btn btn-outline-primary" href="{{ $produks->previousPageUrl() }}">Prev</a>
                        <a class="btn btn-primary" href="{{ $produks->nextPageUrl() }}">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
