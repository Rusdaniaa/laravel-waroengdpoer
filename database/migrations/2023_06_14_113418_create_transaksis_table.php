<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_transaksi');
            $table->string('nama_pemesan',100);
            $table->enum('order',['true','false'])->default('false')->comment('Kolom ini untuk mengecek apakah transaksi sudah fix');
            $table->decimal('total', 8, 2);
            $table->decimal('bayar', 8, 2);
            $table->decimal('kembalian', 8, 2);
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
}
