<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Experience;

class AboutController extends Controller
{

  public function  index(){

  $about = About::all();
  $experiences = Experience::all();

  return view('about', [
    'about' => $about,
    'experiences' => $experiences
  ]);
}

}
