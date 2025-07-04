<?php

namespace App\Http\Controllers;

use App\Models\FixedDeposit;
use Illuminate\Http\Request;

class FixedDepositController extends Controller
{
  public function index()
  {
    $data = FixedDeposit::all();

    return view('fixed_deposit', compact('data'));
  }

  public function fd_calculator($slug)
  {
    $data = FixedDeposit::where('slug', $slug)->first();

    return view('fd_calculator', compact('data'));
  }

  public function uploadFixedDepositImage(Request $request)
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
      $destinationPath = public_path('/storage/deposit');

      // Move file
      $image->move($destinationPath, $name);

      return response()->json([
        'success' => 'Image uploaded successfully',
        'path'    => '/storage/deposit/' . $name
      ], 200);
    }

    return response()->json(['error' => 'No image file found'], 400);
  }

  public function deleteFixedDepositImage(Request $request)
  {
      // Define the path to the image in the storage directory
      $imagePath = public_path('storage/deposit/' . $request->imageName);

      // Check if the file exists
      if (file_exists($imagePath)) {
          // Delete the image
          unlink($imagePath);

          return response()->json([
              'success' => 'Image deleted successfully',
          ], 200);
      }

      return response()->json([
          'error' => 'Image not found',
      ], 404);
  }
}
