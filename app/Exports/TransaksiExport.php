<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaksiExport implements FromCollection,WithHeadings
{
    private $tanggal_akhir,$tanggal_awal;
    public function __construct($tanggal_awal = '', $tanggal_akhir = '') {
        $this->tanggal_awal = $tanggal_awal;
        $this->tanggal_akhir = $tanggal_akhir;
    }

    public function headings():array
    {
        return[
            'Tanggal Pemesanan',
            'Nama Pelanggan',
            'Total',
            'Bayar',
            'Kembalian',
        ];
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