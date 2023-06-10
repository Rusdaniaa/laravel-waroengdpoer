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
                                    <h4 class="page-title">Meja</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    @include('meja._filter')

                                        <div class="table-responsive">
                                            <div id="products-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        @if ($message = Session::get('success'))
                                                            <div class="alert alert-success">
                                                                {{ $message }}
                                                            </div>
                                                        @endif

                                                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed" id="products-datatable" role="grid" aria-describedby="products-datatable_info" style="width: 1113px;">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Nomor Meja</th>
                                                                    <th>Status</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($mejas as $m)
                                                                    <tr>
                                                                        <td>{{ $m->nomor_meja }}</td>
                                                                        <td>
                                                                            @if ($m->status == 'tersedia')
                                                                                <span class="badge badge-success-lighten">Tersedia</span>
                                                                            @else
                                                                                <span class="badge badge-danger-lighten">Tidak Tersedia</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            <form action="{{ url('/meja/update/' . $m->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('PUT')

                                                                                <button type="submit" class="btn btn-success" name="status" value="tidak tersedia">
                                                                                    <i class="fas fa-check"></i>
                                                                                </button>
                                                                                <button type="submit" class="btn btn-danger" name="status" value="tersedia">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </form>
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
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div>
</main>
@endsection
