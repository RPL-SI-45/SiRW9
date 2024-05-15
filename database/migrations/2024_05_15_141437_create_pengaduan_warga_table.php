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
        Schema::create('pengaduan_warga', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Aduan');
            $table->string('Nama_Pengadu');
            $table->enum('RT_Pengadu',['1','2','3','4']);
            $table->enum('StatusAduan',['Belum Diverifikasi','Terverifikasi']);
            $table->string('Bukti_Aduan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan_warga');
    }
};
