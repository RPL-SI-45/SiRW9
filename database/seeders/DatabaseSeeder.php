<?php

namespace Database\Seeders;

use App\Models\CarouselImage;
use App\Models\PhotoCarousel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeders::class);
        $this->call(PanduanSeeder::class);
        $this->call(ProfilRWSeeder::class);
        $this->call(CarouselImageSeeder::class);
        $this->call(PhotoCarouselSeeder::class);
    }
};