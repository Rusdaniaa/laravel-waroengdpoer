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
                <form method="POST" action="{{ url('tambahbarang/save') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Barang</label>
                    <input type="text" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="text" id="harga" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" id="keterangan" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="filename" class="form-label">Default file input</label>
                    <input type="file" id="filename" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                </div> <!-- content -->
                </form>
</main>
@endsection