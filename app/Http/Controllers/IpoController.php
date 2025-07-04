<?php

namespace App\Http\Controllers;

use App\Models\Ipo; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class IpoController extends Controller
{
    public function index(Request $request)
    {
        // allowed page‐sizes
        $allowed = [10, 25, 50, 100];
        // read from query (default to 10)
        $perPage = (int) $request->input('perpage', 10);
        if (! in_array($perPage, $allowed)) {
            $perPage = 10;
        }
        $sort = strtolower($request->input('sort', 'desc')) === 'asc' ? 'asc' : 'desc';
        $ipos = Ipo::orderBy('open_date', $sort)
                   ->paginate($perPage)
                   // make sure the perpage param stays in the links
                   ->appends(['perpage' => $perPage]);

        // pass the current selection to the view
        return view('ipos.index', compact('ipos', 'perPage','sort'));
    }
    public function read($slug)
    {
        $ipo = Ipo::where('slug', $slug)->firstOrFail();

        return view('ipos.read', compact('ipo'));
    }
}
