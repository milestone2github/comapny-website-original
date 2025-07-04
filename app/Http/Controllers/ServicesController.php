<?php

namespace App\Http\Controllers;
use App\Models\Service;

class ServicesController extends Controller
{
  public function equityMutualFund()
  {
    $data = Service::where('id', 1)->first();
    return view('mutual-funds.index', ['data' => $data]);
  }

  public function debtMutualFund()
  {
    $data = Service::where('id', 2)->first();
    return view('mutual-funds.index', ['data' => $data]);
  }

  public function hybridMutualFund()
  {
    $data = Service::where('id', 3)->first();
    return view('mutual-funds.index', ['data' => $data]);
  }

  public function lifeInsurance()
  {
    $data = Service::where('id', 12)->first();
    return view('mutual-funds.index', ['data' => $data]);
  }

  public function healthInsurance()
  {
    $data = Service::where('id', 8)->first();
    return view('mutual-funds.index', ['data' => $data]);
  }

  public function corporateInsurance()
  {
    $data = Service::where('id', 10)->first();
    return view('mutual-funds.index', ['data' => $data]);
  }

  public function disclaimer()
  {
    $data = Service::where('id', 18)->first();
    return view('mutual-funds.disclamer', ['data' => $data]);
  }
  public function discolosure()
  {
    $data = Service::where('id', 17)->first();
    return view('mutual-funds.disclosure', ['data' => $data]);
  }
}