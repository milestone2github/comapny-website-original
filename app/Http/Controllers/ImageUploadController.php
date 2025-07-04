<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function uploadImage(Request $request)
{
    // Validate that the request contains an image
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Retrieve the file
        $image = $request->file('image');

        // Create a unique name
        $name = time() . '.' . $image->getClientOriginalExtension();

        // Destination path
        $destinationPath = public_path('/images/blog');

        // Move file
        $image->move($destinationPath, $name);

        return response()->json([
            'success' => 'Image uploaded successfully',
            'path'    => '/images/blog/' . $name
        ], 200);
    }

    return response()->json(['error' => 'No image file found'], 400);
}

}
