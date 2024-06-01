<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;

class CarouselImageController extends Controller
{
    public function index()
    {
        $carouselImages = CarouselImage::all();
        return view('carousel-images.index', compact('carouselImages'));
    }
    public function adminindex()
    {
        $carouselImages = CarouselImage::all();
        return view('carousel-images.adminindex', compact('carouselImages'));
    }
    public function view()
    {
        $carouselImages = CarouselImage::all();
        return view('carousel-images.view', compact('carouselImages'));
    }

    public function edit(CarouselImage $carouselImage)
    {
        return view('carousel-images.edit', compact('carouselImage'));
    }

    public function update(Request $request, CarouselImage $carouselImage)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if needed
            // Storage::delete($carouselImage->image);

            $imagePath = $request->file('image')->store('carousel-images');
            $carouselImage->update([
                'image' => $imagePath,
            ]);
        }

        return redirect()->route('carousel-images.index')->with('success', 'Carousel Image updated successfully.');
    }

}
