<?php

namespace App\Http\Controllers\Web;

use App\Workshop;
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function index()
  {
    $workshops = Workshop::where('status', 1)->take(3)->get();

    return view('web.welcome', compact('workshops'));
  }

  public function projects()
  {
    return view('web.projects');
  }

  public function learn()
  {
    $courses = Course::all();

    return view('web.learn', compact('courses'));
  }

  public function terms()
  {
    return view('web.terms');
  }

  public function privacy()
  {
    return view('web.privacy');
  }

  public function event()
  {
    return view('web.event');
  }
}
