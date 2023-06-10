<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create Transaction</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('transaksi.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="tgl_transaksi">Transaction Date:</label>
                            <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" required>
                        </div>

                        <div class="form-group">
                            <label for="kode_barang">Product Code:</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Product Name:</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                        </div>

                        <div class="form-group">
                            <label for="harga">Price:</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="subtotal">Subtotal:</label>
                            <input type="text" class="form-control" id="subtotal" name="subtotal" required>
                        </div>

                        <div class="form-group">
                            <label for="bayar">Payment:</label>
                            <input type="text" class="form-control" id="bayar" name="bayar" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" id="print">
              <div class="card-header bg-white border-0 pb-0 pt-4">
                <h5 class="card-tittle mb-0 text-center"><b>[Nama Toko]</b></h5>
                <p class="m-0 small text-center">[Alamat]</p>
                <p class="small text-center">Telp. [Nomor Telepon]</p>
                <div class="row">
                  <div class="col-8 col-sm-9 pr-0">
                    <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                      <li>NOTA : [Nomor Nota]</li>
                    </ul>
                  </div>
                  <div class="col-4 col-sm-3 pl-0">
                    <ul class="pl-0 small" style="list-style: none;">
                      <li>TGL : [Tanggal]</li>
                      <li>JAM : [Waktu]</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body small pt-0">
                <hr class="mt-0">
                <div class="row">
                  <div class="col-5 pr-0">
                    <span><b>Nama Barang</b></span>
                  </div>
                  <div class="col-1 px-0 text-center">
                    <span><b>Qty</b></span>
                  </div>
                  <div class="col-3 px-0 text-right">
                    <span><b>Harga</b></span>
                  </div>
                  <div class="col-3 pl-0 text-right">
                    <span><b>Subtotal</b></span>
                  </div>
                  <div class="col-12">
                    <hr class="mt-2">
                  </div>
                  <!-- Barang loop -->
                  <div class="col-5 pr-0">
                    <a href="?id=[ID]" onclick="javascript:return confirm('Hapus Data Barang ?');" style="text-decoration:none;">
                      <i class="fa fa-times fa-xs text-danger mr-1"></i>
                      <span class="text-dark">[Nama Barang]</span>
                    </a>
                  </div>
                  <div class="col-1 px-0 text-center">
                    <span>[Quantity]</span>
                  </div>
                  <div class="col-3 px-0 text-right">
                    <span>[Harga Barang]</span>
                  </div>
                  <div class="col-3 pl-0 text-right">
                    <span>[Subtotal]</span>
                  </div>
                  <!-- End barang loop -->
                  <div class="col-12">
                    <hr class="mt-2">
                    <ul class="list-group border-0">
                      <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                        <b>Total</b>
                        <span><b>[Total Bayar]</b></span>
                      </li>
                      <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                        <b>Bayar</b>
                        <span><b>[Bayar]</b></span>
                      </li>
                      <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                        <b>Kembalian</b>
                        <span><b>[Kembalian]</b></span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-12 mt-3 text-center">
                    <p>* TERIMA KASIH TELAH BERBELANJA *</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-right mt-3">
                <form method="POST">
                  <button class="btn btn-purple-light btn-sm mr-2" onclick="printContent('print')"><i class="fa fa-print mr-1"></i> Print</button>
                  <button class="btn btn-purple btn-sm" name="selesai" type="submit"><i class="fa fa-check mr-1"></i> Selesai</button>
                </form>
              </div>
    </div>
            <form method="POST">
              <div class="form-group row mb-0">
                <input type="hidden" class="form-control" name="no_transaksi" value="" readonly>
                <input type="hidden" class="form-control" value="" id="hargatotal" readonly>
                <label class="col-sm-4 col-form-label col-form-label-sm"><b>Bayar</b></label>
                <div class="col-sm-8 mb-2">
                  <input type="number" class="form-control form-control-sm" name="bayar" id="bayarnya" onchange="">
                </div>
                <label class="col-sm-4 col-form-label col-form-label-sm"><b>Kembali</b></label>
                <div class="col-sm-8 mb-2">
                  <input type="number" class="form-control form-control-sm" name="kembalian" id="total1" readonly>
                </div>
              </div>
              <div class="text-right">
                <button class="btn btn-purple btn-sm" name="save1" value="simpan" type="submit">
                  <i class="fa fa-shopping-cart mr-2"></i>Bayar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>


      </div>
    </div>
  </div>
