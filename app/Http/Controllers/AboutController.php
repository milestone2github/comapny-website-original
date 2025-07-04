<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('aboutAndContact.about');
    }
    public function contactUs()
    {
        return view('aboutAndContact.contact');
    }
}
