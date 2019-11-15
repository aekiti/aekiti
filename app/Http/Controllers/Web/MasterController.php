<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function index()
  {
    return view('web.welcome');
  }

  public function projects()
  {
    return view('web.projects');
  }

  public function terms()
  {
    return view('web.terms');
  }

  public function privacy()
  {
    return view('web.privacy');
  }
}
