@extends('layouts.main')
@section('title', 'Tambah Meja')
@section('content')
    <div class="container">
        <h1>Tambah Meja</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{url('/meja/store')}}">
            @csrf
            <div class="mb-3">
                <label for="nomor_meja" class="form-label">Nomor Meja</label>
                <input type="text" name="nomor_meja" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    @foreach ($statusOptions as $option)
                        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Meja</button>
        </form>
    </div>
@endsection
