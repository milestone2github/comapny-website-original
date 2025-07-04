<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmallCapFundsController extends Controller
{
    public function small_cap_funds()
    {
        return view('invest-plan.small-cap-funds');
    }
}
