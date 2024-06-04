<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('panduan_layanan')->insert([

            'Judul_Panduan' => 'Mengajukan Pembuatan Surat Online',
            
            'IsiPanduan' => '
                <h4><b>Langkah-Langkah Mengajukan Surat Secara Online</b></h4>
                1. Pilih Jenis Surat:
                Pilih jenis surat yang ingin diajukan, seperti Surat Pengantar, Surat Keterangan, atau lainnya.
                <br>
                2. Isi Formulir:
                Isi formulir dengan informasi yang diperlukan sesuai dengan kolom yang disediakan.
                <br>
                3. Upload Dokumen:
                Upload dokumen yang diperlukan, seperti identitas diri, keterangan, atau lainnya.
                <br>
                4. Kirim Surat:
                Kirim pengajuan surat secara online melalui website RW09.
            ',
            
            'KategoriPanduan' => 'Pelayanan Administrasi',

            'slug' => 'pembuatansurat',

            'created_at' => now(),

            'updated_at' => now()

        ]);
    }
}
