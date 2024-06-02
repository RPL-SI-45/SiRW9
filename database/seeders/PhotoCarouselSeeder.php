<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PhotoCarousel;

class PhotoCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'image' => 'uploads/photocarousel/photo1.jpg'
            ],
            [
                'image' => 'uploads/photocarousel/photo2.jpg'
            ],
            [
                'image' => 'uploads/photocarousel/photo3.jpg'
            ],
            [
                'image' => 'uploads/photocarousel/photo4.jpg'
            ],
        ];

        foreach ($images as $image) {
            PhotoCarousel::create($image);
        }
    }
}
