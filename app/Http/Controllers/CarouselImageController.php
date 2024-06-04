<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;
use Illuminate\Support\Facades\Log;

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

    public function edit($id)
    {
        $carouselImage = CarouselImage::findOrFail($id);
        return view('carousel-images.edit', compact('carouselImage'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $carouselImage = CarouselImage::findOrFail($id);

        if ($request->hasFile('image')) {
            // Generate a unique file name
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/carousel-images/';

            // Delete the old image file if it exists
            if ($carouselImage->image && file_exists(public_path($carouselImage->image))) {
                unlink(public_path($carouselImage->image));
            }

            // Save the new file
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $path . $filename;
        }

        $carouselImage->update($validatedData);

        return redirect("/admin/homepage-edit")->with('sukses', 'Berhasil mengupdate Carousel Image!');
    }
}
