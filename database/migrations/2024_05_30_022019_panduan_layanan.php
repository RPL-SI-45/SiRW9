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
        Schema::create('panduan_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('Judul_Panduan');
            $table->text('IsiPanduan');
            $table->enum('KategoriPanduan', ['Informasi Umum', 'Pelayanan Administrasi', 'Kegiatan dan Program RW', 'Partisipasi dan Pengaduan Masyarakat']);
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panduan');
    }
};
