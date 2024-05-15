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
            $table->string("aduan");
            $table->string("nama_pengadu", 100);
            $table->string("rt_pengadu");
            $table->enum("status_aduan", ["menunggu", "disetujui", "ditolak"]);
            $table->string("bukti_aduan", 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan_wargha');
    }
};
