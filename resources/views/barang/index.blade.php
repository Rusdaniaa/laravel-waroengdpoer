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
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Products</a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="all" style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th class="all">Product</th>
                                                        <th>Category</th>
                                                        <th>Added Date</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Status</th>
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                                            <p class="m-0 d-inline-block align-middle font-16">
                                                                <a href="apps-ecommerce-products-details.html" class="text-body">Amazing Modern Chair</a>
                                                                <br>
                                                                <span class="text-warning mdi mdi-star"></span>
                                                                <span class="text-warning mdi mdi-star"></span>
                                                                <span class="text-warning mdi mdi-star"></span>
                                                                <span class="text-warning mdi mdi-star"></span>
                                                                <span class="text-warning mdi mdi-star"></span>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            Aeron Chairs
                                                        </td>
                                                        <td>
                                                            09/12/2018
                                                        </td>
                                                        <td>
                                                            $148.66
                                                        </td>
                    
                                                        <td>
                                                            254
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success">Active</span>
                                                        </td>
                    
                                                        <td class="table-action">
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="products-datatable_info" role="status" aria-live="polite">Showing products 6 to 10 of 12</div>
                                        </div>
                                        <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_paginate paging_simple_numbers" id="products-datatable_paginate">
                                        <ul class="pagination pagination-rounded">
                                            <li class="paginate_button page-item previous" id="products-datatable_previous">
                                                <a href="#" aria-controls="products-datatable" data-dt-idx="0" tabindex="0" class="page-link">
                                                <i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="products-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="products-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="products-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="products-datatable_next">
                                                <a href="#" aria-controls="products-datatable" data-dt-idx="4" tabindex="0" class="page-link">
                                                <i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        
                    </div> <!-- container -->

                </div> <!-- content -->
</main>
@endsection