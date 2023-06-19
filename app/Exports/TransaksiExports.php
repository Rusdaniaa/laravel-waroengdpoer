<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransaksiExport implements FromCollection
{
    private $tanggal_akhir,$tanggal_awal;
    public function __construct($tanggal_awal = '', $tanggal_akhir = '') {
        $this->tanggal_awal = $tanggal_awal;
        $this->tanggal_akhir = $tanggal_akhir;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return ($this->tanggal_awal == '' && $this->tanggal_akhir == '')
        ?  Transaksi::all(['tgl_transaksi','nama_pemesan','total','bayar','kembalian'])
        :  Transaksi::whereBetween('tgl_transaksi',[$this->tanggal_awal,$this->tanggal_akhir])->get(['tgl_transaksi','nama_pemesan','total','bayar','kembalian']);

    }
}
