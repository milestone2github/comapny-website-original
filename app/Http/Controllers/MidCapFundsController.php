<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidCapFundsController extends Controller
{
    public function mid_cap_funds()
    {
        return view('invest-plan.mid-cap-funds');
    }
}
