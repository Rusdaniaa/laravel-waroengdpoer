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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                            <li class="breadcrumb-item active">Create Project</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create Project</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- start page title -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="page-title-box">
                                                    <h4 class="page-title">Tambah Barang</h4>
                                                </div>
                                            </div>
                                        </div>     
                                        <!-- end page title --> 
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">Kode Barang</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="project-budget" class="form-label">Harga Barang</label>
                                                    <input type="text" id="project-budget" class="form-control" placeholder="">
                                                </div>                                               

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="project-budget" class="form-label">Nama Barang</label>
                                                    <input type="text" id="project-budget" class="form-control" placeholder="">
                                                </div> 
                                                <div class="mb-3 position-relative" id="datepicker2">
                                                    <label class="form-label">Tanggal Input</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
                </main>
                @endsection