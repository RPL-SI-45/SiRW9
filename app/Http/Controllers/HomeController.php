<?php

namespace App\Http\Controllers;

use App\Models\Beritakegiatan;
use App\Models\CarouselImage;
use App\Models\PhotoCarousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritakegiatan = Beritakegiatan::latest()->take(3)->get();
        $carouselImages = CarouselImage::all();
        $photoCarouselImages= PhotoCarousel::all();

        return view('welcome', compact('beritakegiatan', 'carouselImages','photoCarouselImages'));
    }
}
