<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilRW;

class ProfilRWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ProfilRW::index([
            'description' => 'Gambar ini adalah denah yang menampilkan profil wilayah Rukun Warga (RW). Denah ini mencakup berbagai aspek penting dari wilayah tersebut, memberikan gambaran visual yang komprehensif mengenai struktur dan fasilitas yang ada. Denah Profil RW ini tidak hanya memberikan informasi visual yang berguna bagi penduduk setempat tetapi juga membantu para pengunjung, peneliti, dan pemerintah dalam memahami struktur dan fasilitas yang ada di wilayah tersebut. Dengan denah yang detail dan informatif, perencanaan dan pengelolaan wilayah RW dapat dilakukan dengan lebih efektif dan efisien.',
            'image' => 'uploads/profilrw/denah.jpg'
        ]);
    }
}
