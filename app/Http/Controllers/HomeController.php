<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;
use App\Service;
use App\About;

class HomeController extends Controller
{

  public function __construct()
    {
      //  $this->middleware('auth');
    }
    public function index()
    {

      $tools = Tool::all();
      $services = Service::all();
      $about = About::all();

      return view('home', [
        'tools' => $tools,
        'services' => $services,
        'about' => $about
      ]);
    }
}
