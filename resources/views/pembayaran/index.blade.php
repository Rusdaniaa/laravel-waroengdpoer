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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pembayaran</a></li>
                                        <li class="breadcrumb-item active">Cetak</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Pembayaran</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    @include('pembayaran.pos')
                                    @include('pembayaran._filter')

                                        <div class="table-responsive">
                                            <div id="products-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed" id="products-datatable" role="grid" aria-describedby="products-datatable_info" style="width: 1113px;">
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
                                                                @foreach ($transaksis as $key =>$bayar)
                                                                    <tr>
                                                                        <td>
                                                                            {{ $key+1 }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $bayar->nama_pemesan}}
                                                                        </td>
                                                                        <td>
                                                                            {{ number_format($bayar->total)}}
                                                                        </td>
                                                                        <td>
                                                                            {{ $bayar->bayar == 0.00 ? 'Belum Dibayar' : 'Sudah Dibayar' }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $bayar->created_at }}
                                                                        </td>

                                                                        <td class="table-action">
                                                                            <a href="{{ route('transaksi.bayar',['id'=>$bayar]) }}" class="action-icon">
                                                                                <i class="mdi mdi-eye"></i></a>
                                                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                                                    class="mdi mdi-delete"></i></a>
                                                                        </td>

                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                            </table>
                                                            <nav class="mt-4">
                                                                <ul class="pagination justify-content-center">
                                                                    <li class="page-item disabled">
                                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                    <li class="page-item">
                                                                    <a class="page-link" href="#">Next</a>
                                                                    </li>
                                                                </ul>
                                                                </nav>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div>
</main>
@endsection
