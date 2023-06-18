@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Barang')
@section('content')
<main class="py-5">
        <div class="content">
                @if (session('success'))
                    <div>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                @endif
            <form method="POST" action="{{ route('simpan_menu') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="text" name="harga" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="" name="id_kategori">
                        <option selected> ---Pilih Kategori---</option>
                        @foreach($kategori as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="barang" class="form-label">Foto Barang</label>
                    <input type="file" name="barang" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>

            </form>
        </div> <!-- content -->
</main>
@endsection
