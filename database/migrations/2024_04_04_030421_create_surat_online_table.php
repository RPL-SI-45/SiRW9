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
            $table->string('Nama Lengkap');
            $table->integer('Tanggal Lahir');
            $table->string('NIK');
            $table->enum('Jenis Kelamin' ,['L','P']);
            $table->enum('Status Perkawinan', ['Belum Menikah', 'Sudah Menikah']);
            $table->enum('Agama' ,['Kristen','Islam','Hindu','Buddha','Konghucu']);
            $table->text('Alamat');
            $table->string('Pekerjaan');
            $table->string('Nomor Handphone (Whatsapp)');
            $table->string('Berkas Pendukung (Link Drive)');
            $table->string('Keperluan');
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
