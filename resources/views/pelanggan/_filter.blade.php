<div class="row mb-2">
                                            <div class="col-xl-8">
                                                <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between" action="{{ url('barang') }}" method="GET">
                                                    <div class="col-auto">
                                                        <label for="inputPassword2" class="visually-hidden">Search</label>
                                                        <input type="search" class="form-control" id="inputPassword2" name="search" placeholder="Search...">
                                                    </div>
                                                </form>                            
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="text-xl-end mt-xl-0 mt-2">
                                                <a href="{{ url('create') }}" class="btn btn-danger mb-2 me-2">Tambah Data</a>
                                                </div>
                                            </div><!-- end col-->
                                        </div>