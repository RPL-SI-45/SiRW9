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
        Schema::create('iuran_kas_table', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lengkap');
            $table->string('Alamat');
            $table->integer('RT');
            $table->date('Tanggal_Bayar');
            $table->string('Nomor_Rekening');
            $table->string('Nama_Pengirim');
            $table->string('Bukti_Pembayaran', 300);
            $table->enum('Status_Pembayaran', ['Lunas', 'Belum Lunas']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iuran_kas_table');
    }
};
