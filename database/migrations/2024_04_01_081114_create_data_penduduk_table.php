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
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->id();
            $table->string("NIK");
            $table->enum('Jenis_Kelamin',['Pria','Wanita']);
            $table->string('Nama_Warga');
            $table->date('Tanggal_Lahir');
            $table->string('Alamat');
            $table->enum('RT',['1','2','3','4']);
            $table->enum('Status_Perkawinan',['Belum Kawin','Kawin']);
            $table->string('Pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduk');
    }
};
