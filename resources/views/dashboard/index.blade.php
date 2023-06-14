@extends('layouts.main')
@section('title', 'Waroeng Dpoer Apps | Barang')
@section('content')
<main class="py-5">
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <!-- start page title -->

                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-boady">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Customer</h5>
                                                <h3 class="my-2 py-1" id="jumlahPelanggan" name="jumlahPelanggan"></h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Orders</h5>
                                                <h3 class="my-2 py-1" id="jumlahorder" name="jumlahorder"></h3>
                                                <p class="mb-0 text-muted">
                                                <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Jumlah Pendapatan">Jumlah Pendapatan</h5>
                                                <h3 class="my-2 py-1" id="jumlahpendapatan" name="jumlahorder"></h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Menu terjual</h5>
                                                <h3 class="my-2 py-1" id="menuterjual" name="menu terjual"></h3>
                                                <p class="mb-0 text-muted">
                                                <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>

        </div>            <!-- end row -->

        </div>

            <!-- Include your JavaScript code -->
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                // Mengambil jumlah pelanggan melalui permintaan AJAX
                fetch('/dashboard/jumlahpelanggan')
                    .then(response => response.json())
                    .then(data => {
                        // Menampilkan jumlah pelanggan di elemen HTML yang sesuai
                        document.getElementById('jumlahPelanggan').innerText = data.jumlahPelanggan;
                    })
                    .catch(error => console.log(error));
            });

            window.addEventListener('DOMContentLoaded', (event) => {
                // Mengambil jumlah pelanggan melalui permintaan AJAX
                fetch('/dashboard/jumlahorder')
                    .then(response => response.json())
                    .then(data => {
                        // Menampilkan jumlah pelanggan di elemen HTML yang sesuai
                        document.getElementById('jumlahorder').innerText = data.jumlahorder;
                    })
                    .catch(error => console.log(error));
            });

            window.addEventListener('DOMContentLoaded', (event) => {
                // Mengambil jumlah pendapatan melalui permintaan AJAX
                fetch('/dashboard/jumlahpendapatan')
                    .then(response => response.json())
                    .then(data => {
                        // Menampilkan jumlah pendapatan di elemen HTML yang sesuai
                        document.getElementById('jumlahpendapatan').innerText = data.jumlahpendapatan;
                    })
                    .catch(error => console.log(error));
            });

            //window.addEventListener('DOMContentLoaded', (event) => {
                // Mengambil jumlah pendapatan melalui permintaan AJAX
                //fetch('/dashboard/jumlahmenuterjual')
                    //.then(response => response.json())
                    //.then(data => {
                        // Menampilkan jumlah pendapatan di elemen HTML yang sesuai
                      //  document.getElementById('jumlahmenuterjual').innerText = data.jumlahmenuterjual;
                    //})
                   // .catch(error => console.log(error));
           /// });
        </script>
</main>
@endsection
