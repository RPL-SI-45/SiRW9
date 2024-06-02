<?php

namespace App\Http\Controllers;

use App\Models\PhotoCarousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoCarouselController extends Controller
{
    public function adminindex()
    {
        $photoCarouselImages = PhotoCarousel::all(); 
        return view('carousel-images.adminindex', compact('photoCarouselImages'));
    }
    public function create() {
        return view('photo.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/photocarousel/';
            $file->move($path, $filename);
            $validatedData['image'] = $path . $filename;
        }

        PhotoCarousel::create($validatedData);

        return redirect('/admin/homepage-edit')->with('sukses', 'Berhasil menambahkan berita kegiatan baru!');
    }

    public function edit($id)
    {
        $photo = PhotoCarousel::findOrFail($id);
        return view('photo.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        $validatedData= $request ->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = PhotoCarousel::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/photocarousel/';

            if ($photo->image && file_exists(public_path($photo->image))) {
                unlink(public_path($photo->image));
            }

            $file->move($path, $filename);
            $validatedData['image'] = $path . $filename;
        }

        $photo->update($validatedData);

        return redirect('/admin/homepage-edit')->with('sukes', 'Photo updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $photo = PhotoCarousel::findOrFail($id);

        // Delete the image file if it exists
        if ($photo->image && Storage::disk('public')->exists($photo->image)) {
            Storage::disk('public')->delete($photo->image);
        }

        $photo->delete();

        return redirect()->route('carousel-images.adminindex')->with('success', 'Photo deleted successfully');
    }
}
