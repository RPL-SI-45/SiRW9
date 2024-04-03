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
        Schema::create('surat_online', function (Blueprint $table) {
            $table->id();
            $table->enum("status_surat", ["menunggu", "disetujui", "ditolak"]);
            $table->enum("jenis_kelamin", ["laki-laki", "perempuan"]);        
            $table->enum("jenis_surat", ["izin", "kunjungan", "pindah", "lainnya"]);
            $table->enum("agama", ["islam", "kristen", "katolik", "hindu", "budha", "konghucu"]);
            $table->enum("status_perkawinan", ["belum kawin", "kawin", "cerai hidup", "cerai mati"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_online');
    }
};
