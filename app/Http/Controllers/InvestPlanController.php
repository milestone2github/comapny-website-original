<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestPlanController extends Controller
{
    public function large_cap_funds()
    {
        return view('invest-plan.large-cap-funds');
    }

    public function mid_cap_funds()
    {
        return view('invest-plan.mid-cap-funds');
    }
    public function small_cap_funds()
    {
        return view('invest-plan.small-cap-funds');
    }
    public function investPlan()
    {
        return view('invest-plan.invest-plan');
    }
    public function mutualFunds()
    {
        return view('invest-plan.mutual-funds');
    }
}
