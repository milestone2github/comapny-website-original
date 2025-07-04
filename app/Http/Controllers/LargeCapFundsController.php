<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LargeCapFundsController extends Controller
{
    public function large_cap_funds()
    {
        return view('invest-plan.large-cap-funds');
    }
}
