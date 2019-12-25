<?php

namespace App\Http\Controllers\Web;

use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkshopController extends Controller
{
  public function show(Workshop $workshop)
  {
    return view('web.workshop', compact('workshop'));
  }
}
