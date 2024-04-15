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
            $table->string("nama_lengkap", 100);
            $table->string('nik');
            $table->string("keperluan");
            $table->enum("jenis_surat", ["izin", "kunjungan", "pindah", "lainnya"]);
            $table->string("tanggal_lahir", 100);
            $table->integer("umur");
            $table->enum("status", ["belum kawin", "kawin", "cerai hidup", "cerai mati"]);
            $table->enum("agama", ["islam", "kristen", "katolik", "hindu", "budha", "konghucu"]);
            $table->enum("jenis_kelamin", ["laki-laki", "perempuan"]);  
            $table->string("pekerjaan", 100);      
            $table->string("dokumen");
            $table->enum("status_surat", ["menunggu", "disetujui", "ditolak"]);
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
