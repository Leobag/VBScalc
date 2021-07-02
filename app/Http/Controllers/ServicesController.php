<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\serviceBackground;

class ServicesController extends Controller
{

  public function index(){

    $services = service::all();
    $background = serviceBackground::all()->first();

    return view('services', [
      'services' => $services,
      'background' => $background
    ]);
  }

}
