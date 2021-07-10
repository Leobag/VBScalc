<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tool;
use App\service_home;
use App\about_home;
use App\homeBackground;

class ABMhomecontroller extends Controller
{

  public function index()
  {

    $tools = tool::all();
    $services = service_home::all();
    $about = about_home::all();
    $background = homeBackground::all();

    return view('/ABM/home/index', [
      'tools' => $tools,
      'services' => $services,
      'abouts' => $abouts,
      'backgrounds' => $backgrounds
    ]);
  }

}
