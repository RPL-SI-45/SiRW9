<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarouselImage;

class CarouselImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        CarouselImage::create([
            'image' => 'uploads/carousel-images/images1.png'
        ]);

        CarouselImage::create([
            'image' => 'uploads/carousel-images/images2.png'
        ]);

        CarouselImage::create([
            'image' => 'uploads/carousel-images/images3.png'
        ]);
    }
}
