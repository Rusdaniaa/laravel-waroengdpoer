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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('no_transaksi');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('users');
            $table->unsignedBigInteger('id_meja');
            $table->foreign('id_meja')->references('id')->on('meja');
            $table->Integer('total_transaksi');
            $table->string('metode_pembayaran');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
