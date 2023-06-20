<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
<link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
<style>
    .menu {
        display: inline-block;
        padding: 0px;
        margin: 0px;
    }
    ul {
        list-style-type: none;
    }
    .text-bold {
        font-weight: bold;
    }
    /* table{
            table-layout:auto;
        } */
    .page-break {
        page-break-after: always;
    }
    .text-center {
        text-align: center;
    }
    .pl-1 {
        padding-left: 1rem;
    }
    .text-small {
        font-size: 13px;
    }
    .center {
        /* align-items: center; */
        width: 50%;
        margin: auto;
    }
    @page {
        size: A5;
        margin: 0;
    }
    @media print {
        html,
        body {
            width: 210mm;
            height: 297mm;
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
    .center{
        margin: auto;
        text-align: center;
    }
    .p-3{
        padding: 3 3 3 3;
    }
</style>

<body width="100%">
    <section class="p-3">
        <div class="card" id="print">
            <div class="card-header bg-white border-0 pb-0 pt-4">
                <h5 class="card-tittle mb-0 text-center"><b>Waroeng D'Poer</b></h5>
                <p class="m-0 small text-center">Umbulsari</p>
                <p class="small text-center">Telp. 082310774468</p>
                <div class="row">
                    <div class="col-8 col-sm-9 pr-0">
                        <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                            <li>NOTA : {{ \Illuminate\Support\Str::random(5)  }} - {{ $transaksi->id }}</li>
                        </ul>
                    </div>
                    <div class="col-4 col-sm-3 pl-0">
                        <ul class="pl-0 small" style="list-style: none;">
                            <li>TGL : {{ $transaksi->tgl_transaksi }}</li>
                            {{-- <li>JAM : [Waktu]</li> --}}
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
                    @foreach($detail as $key => $value)
                        <div class="col-5 pr-0">
                        <span>{{ $value->nama_barang }}</span>
                    </div>
                    <div class="col-1 px-0 text-center">
                        <span>{{ $value->quantity }}</span>
                    </div>
                    <div class="col-3 px-0 text-right">
                        <span>Rp. {{ number_format($value->harga) }}</span>
                    </div>
                    <div class="col-3 pl-0 text-right">
                        <span>Rp. {{ number_format($value->subtotal) }}</span>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2">
                    </div>
                    @endforeach


                    <!-- End barang loop -->
                    <div class="col-12">
                        <hr class="mt-2">
                        <ul class="list-group border-0">
                            <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                                <b>Total</b>
                                <span><b>Rp. {{ number_format($transaksi->total) }}</b></span>
                            </li>
                            <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                                <b>Bayar</b>
                                <span><b>Rp. {{ number_format($transaksi->bayar) }}</b></span>
                            </li>
                            <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                                <b>Kembalian</b>
                                <span><b>Rp. {{ number_format($transaksi->kembalian) }}</b></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 mt-3 text-center">
                        <p>* TERIMA KASIH TELAH BERBELANJA *</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
