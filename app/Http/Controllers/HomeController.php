<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tool;
use App\service_home;
use App\about_home;
use App\homeBackground;

class HomeController extends Controller
{

  public function __construct()
    {
      //  $this->middleware('auth');
    }
    public function index()
    {

      $tools = tool::all();
      $services = service_home::all();
      $about = about_home::all()->first();
      $background = homeBackground::all()->first();

      return view('/home', [
        'tools' => $tools,
        'services' => $services,
        'about' => $about,
        'background' => $background
      ]);
    }
}
