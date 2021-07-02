<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abouts;
use App\aboutBackground;
use App\experience;

class AboutController extends Controller
{

  public function  index(){

  $abouts = abouts::all();
  $background = aboutBackground::all()->first();
  $experiences = experience::all();

  return view('about', [
    'abouts' => $abouts,
    'background' => $background,
    'experiences' => $experiences
  ]);
}

}
