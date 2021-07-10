<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\abouts;
use App\aboutBackground;
use App\experience;

class ABMaboutcontroller extends Controller
{


  public function  index(){

  $abouts = abouts::all();
  $background = aboutBackground::all();
  $experiences = experience::all();

  return view('/ABM/about/index', [
    'abouts' => $abouts,
    'backgrounds' => $backgrounds,
    'experiences' => $experiences
  ]);
}


}
