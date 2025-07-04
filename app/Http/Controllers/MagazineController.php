<?php

namespace App\Http\Controllers;

use App\Models\Magazine;

class MagazineController extends Controller
{
  public function index()
  {
    // Fetch blogs with pagination, sorted by the latest first
    $magazines = Magazine::orderBy('release_date', 'desc')->paginate(12);

    // Return the view with the paginated data
    return view('magazine.index', compact('magazines'));
  }

  public function read($slug)
  {
    $magazine = Magazine::where('slug', $slug)->first();

    return view('magazine.read', compact('magazine'));
  }
}
