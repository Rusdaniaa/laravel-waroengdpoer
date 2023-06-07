<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailtransaksis', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')->references('no_transaksi')->on('transaksis');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->Integer('jumlah');
            $table->Integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailtransaksis');
    }
};
