@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Barang')
@section('content')
    <main class="py-5">
        <div class="content">
            <form method="POST" action="{{ route('transaksi.prosesbayar', ['id' => $transaksi->id]) }}"" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Atas Nama</label>
                    <input type="text" name="nama_barang" class="form-control" value="{{ $transaksi->nama_pemesan }}">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" name="total" class="form-control" value="{{ $transaksi->total }}">
                </div>
                <div class="mb-3">
                    <label for="bayar" class="form-label">Bayar</label>
                    <input type="text" name="bayar" class="form-control">
                </div>
                <div class="table-responsive mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <table
                                    class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                    role="grid" aria-describedby="products-datatable_info"
                                    style="width: 1113px;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Menu</th>
                                            <th>Jumlah Pesanan</th>
                                            <th>Harga Menu</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailTransaksi as $key => $dataMenu)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    {{ $dataMenu->nama_barang }}
                                                </td>
                                                <td>
                                                    {{ $dataMenu->quantity }}
                                                </td>
                                                <td>
                                                    {{ number_format($dataMenu->menu->harga) }}
                                                </td>
                                                <td>
                                                    {{ number_format($dataMenu->subtotal) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Bayar</button>
            </form>
    </main>
@endsection
