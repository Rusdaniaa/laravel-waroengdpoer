@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Barang')
@section('content')
<main class="py-5">
<div class="content">
                <form method="POST" action="{{ route('updatedata', ['id' => $data->id]) }}"" enctype="multipart/form-data">
                @csrf
                <div class="mb-3"> 
                    <label for="name" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value = "{{$data->nama_barang}}">
                </div>
                
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="text" name="harga" class="form-control" value="{{$data->harga}}">
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="{{$data->keterangan}}">
                </div>

                <div class="mb-3">
                    <label for="barang" class="form-label">Default file input</label>
                    <input type="file" name="barang" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
                
                </form>
                
</main>
@endsection