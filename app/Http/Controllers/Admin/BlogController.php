<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use MongoDB\BSON\UTCDateTime;

class BlogController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->query('search');

    // Check for 'deleted_at' as null, which may be represented differently in MongoDB
    $blogs = Blog::where('deleted_at', null)  // MongoDB uses null check instead of 'NULL'
      ->when($search, fn($query) => $query->where('title', 'like', "%{$search}%"))
      ->orderBy('created_at', 'desc')  // Ensure sorting by creation date
      ->paginate(10);

    return view('admin.blogs.index', compact('blogs', 'search'));
  }

  public function create()
  {
    return view('admin.blogs.form');
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'title' => 'required|string|max:255',
      'content' => 'required',
      'author' => 'required|string|max:255',
      'post_date' => 'required|date',
      'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
      'status' => 'nullable|boolean',
      'metaTitle' => 'required|string',
      'metaUrl' => 'required|string',
      'metaKeyword' => 'required|string',
      'metaDescription' => 'nullable|string',
    ]);

    $validated['slug'] = strtolower(str_replace(' ', '-', $validated['title']));
    $validated['deleted_at'] = null;
    $validated['created_at'] = now();

    if (!empty($validated['post_date'])) {
      $timestamp = strtotime($validated['post_date']) * 1000;
      $validated['post_date'] = new \MongoDB\BSON\UTCDateTime($timestamp);
    }

    // Handle image upload
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $uniqueName = time() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images/blog'), $uniqueName);
      $validated['image'] = $uniqueName;
    }

    Blog::create($validated);

    return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
  }

  public function edit(Blog $blog)
  {
    return view('admin.blogs.form', compact('blog'));
  }

  public function update(Request $request, Blog $blog)
  {
    $validated = $request->validate([
      'title' => 'required|string|max:255',
      'content' => 'required',
      'author' => 'required|string|max:255',
      'post_date' => 'required|date',
      'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
      'status' => 'nullable|boolean',
      'metaTitle' => 'required|string',
      'metaUrl' => 'required|string',
      'metaKeyword' => 'required|string',
      'metaDescription' => 'nullable|string',
    ]);

    $validated['slug'] = strtolower(str_replace(' ', '-', $validated['title']));

    if (!empty($validated['post_date'])) {
      $timestamp = strtotime($validated['post_date']) * 1000;
      $validated['post_date'] = new \MongoDB\BSON\UTCDateTime($timestamp);
    }

    $validated['updated_at'] = now();

    // Handle image upload
    if ($request->hasFile('image')) {
      // Delete old image if exists
      if ($blog->image && file_exists(public_path('images/blog/' . $blog->image))) {
        unlink(public_path('images/blog/' . $blog->image));
      }

      // Save new image
      $image = $request->file('image');
      $uniqueName = time() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images/blog'), $uniqueName);
      $validated['image'] = $uniqueName;
    }

    $blog->update($validated);

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
  }

  public function destroy($id)
  {
    $blog = Blog::find($id);
    if ($blog) {
      $blog->update(['deleted_at' => new UTCDateTime(now()->valueOf())]); // Mark as deleted
    }

    return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
  }
}
