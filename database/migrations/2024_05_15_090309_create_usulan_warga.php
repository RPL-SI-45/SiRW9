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
        Schema::create('usulan_warga', function (Blueprint $table) {
            $table->id();
            $table->string('Judul_Usulan');
            $table->string('Nama_Pengusul');
            $table->enum('RT',['1','2','3','4']);
            $table->text('Detail_Usulan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_usulan_warga');
    }
};
