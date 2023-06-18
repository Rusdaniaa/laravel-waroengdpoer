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
                                    <h4 class="page-title">Pelanggan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    {{--@include('pelanggan._filter')--}}

                                        <div class="table-responsive">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed" id="products-datatable" role="grid" aria-describedby="products-datatable_info" style="width: 1113px;">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Nama</th>
                                                                    <th>Email</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($customer as $key => $value)
                                                                <tr>
                                                                    <td>
                                                                        {{ $key+1 }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $value->name }}
                                                                    </td>

                                                                    <td>
                                                                        {{$value->email}}
                                                                    </td>



                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                            </table>

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
