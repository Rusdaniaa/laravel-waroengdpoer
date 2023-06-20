@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Barang')
@section('content')
    <main class="py-5">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Waroeng D'poer</a></li>
                                    <li class="breadcrumb-item active">Data Transaksi</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Data Transaksi</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="table-responsive">
                                    <div class="col-md-12">
                                        <div class="mt-xl-0 mt-2">
                                            <form class=" mb-3" action="{{ route('export_transaksi') }}" method="POST">
                                            @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Tanggal Awal</label>
                                                    <div class="input-group">
                                                        <input type="date" name="tanggal_awal" class="form-control form-control-light"
                                                            >    
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Tanggal akhir</label>
                                                    <div class="input-group">
                                                        <input type="date" name="tanggal_akhir" class="form-control form-control-light"
                                                            >
                                                    </div>
                                                </div>
                                            <button type="submit" class="btn btn-danger mb-2 me-2">Export Data</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="products-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <table
                                                    class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                                    id="datatable" role="grid" aria-describedby="products-datatable_info"
                                                    style="width: 1113px;">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>No Transaksi</th>
                                                            <th>Nama Pemesan</th>
                                                            <th>Total Pesanan</th>
                                                            <th>Status</th>
                                                            <th>Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($transaksis as $key => $bayar)
                                                            <tr>
                                                                <td>
                                                                    {{ $key + 1 }}
                                                                </td>
                                                                <td>
                                                                    {{ $bayar->nama_pemesan }}
                                                                </td>
                                                                <td>
                                                                    {{ number_format($bayar->total) }}
                                                                </td>

                                                                <td>
                                                                    {{ $bayar->bayar == 0.0 ? 'Belum Dibayar' : 'Sudah Dibayar' }}
                                                                </td>

                                                                <td>
                                                                    {{ $bayar->created_at }}
                                                                </td>

                                                                <td class="table-action">
                                                                    <a href="{{ route('transaksi.bayar', ['id' => $bayar]) }}"
                                                                        class="action-icon">
                                                                        <i class="mdi mdi-eye"></i></a>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                                            class="mdi mdi-delete"></i></a>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

        </div>
    </main>
@endsection