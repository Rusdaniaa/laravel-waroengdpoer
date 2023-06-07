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
                <form method="POST" action="{{ url('store') }}" enctype="multipart/form-data">
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
                    <label for="barang" class="form-label">Default file input</label>
                    <input type="file" name="barang" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                </div> <!-- content -->
                </form>
</main>
@endsection