<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Magazine;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\SectionOne;
use App\Models\Offering;

class ContentController extends Controller
{
    public function getSectionOneData()
    {
        // Fetch the first document using the Eloquent model
        $sectionData = SectionOne::first();

        // Provide default values if no data is found
        if (!$sectionData) {
            $sectionData = [
                'title' => 'Default Title',
                'description' => 'Default Description',
                'image_url' => '/path/to/default/image.jpg'
            ];
        }
        return response()->json($sectionData);
    }

    public function getOfferings()
    {
        // Fetch offerings using Eloquent with specific fields
        $offerings = Offering::select('title', 'description', 'image_url', 'button_link')->get();

        return response()->json($offerings);
    }

    // Section 4: Blogs
    public function getBlogs()
    {
        $blogs = Blog::select('title', 'image', 'content', 'descriptions', 'author', 'post_date', 'slug')
            ->where('deleted_at', null)
            ->get()
            ->shuffle()
            ->take(3)
            ->map(function ($blog) {
                // Format the date
                // if (is_numeric($blog->post_date)) {
                    $blog->post_date = Carbon::createFromTimestampMs($blog->post_date)->format('d-M-Y');
                // } else {
                //     $blog->post_date = Carbon::parse($blog->post_date)->format('d-M-Y');
                // }

                // Generate the full URL for the image
                $blog->image_url = asset('images/blog/' . $blog->image);

                return $blog;
            });

        return response()->json($blogs);
    }


    // For rendering the view
    public function index()
    {
        // Fetch data from the 'section_one' table
        $sectionData = SectionOne::first();

        // If no data is found, use default values
        if (!$sectionData) {
            $sectionData = (object)[
                'title' => 'Default Title',
                'description' => 'Default Description',
                'image_url' => '/path/to/default/image.jpg'
            ];
        }

        // Pass the data to the view
        return view('index', ['sectionData' => $sectionData]);
    }


    // Section 4: Magazines
    public function getMagazines()
    {
        try {
            $magazines = Magazine::select('issue_name', 'image_url', 'pdf_url', 'slug', 'release_date')
                ->orderBy('release_date', 'desc')
                ->limit(3)
                ->get()
                ->map(function ($magazine) {
                    $magazine->release_date = $magazine->release_date->toDateTime()->format('F Y'); // Format the date
                    return $magazine;
                });

            return response()->json($magazines);
        } catch (\Exception $e) {
            // Log the error internally
            Log::error("Failed to fetch magazines: {$e->getMessage()}");

            // Return a generic error message
            return response()->json(['error' => 'Failed to fetch magazines'], 500);
        }
    }

    public function getCountryCodes()
    {
        $filePath = storage_path('app/country_codes.json');

        if (!file_exists($filePath)) {
            return response()->json(['error' => 'Country codes file not found.'], 404);
        }

        $countryCodes = file_get_contents($filePath);

        return response()->json(json_decode($countryCodes, true));
    }
}
