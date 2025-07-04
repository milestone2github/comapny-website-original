<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    // Fetch blogs with pagination, sorted by the latest first
    $blogs = Blog::where('deleted_at', null)->orderBy('created_at', 'desc')->paginate(12);

    // Return the view with the paginated data
    return view('blog.index', compact('blogs'));
  }

  public function read($slug)
  {
    $blog = Blog::where('slug', $slug)
      ->whereNull('deleted_at') // Ensure deleted_at is null
      ->first();

    return view('blog.read', compact('blog'));
  }

  public function uploadBlogImage(Request $request)
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
