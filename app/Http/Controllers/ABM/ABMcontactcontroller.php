<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\contactBackground;

class ABMcontactcontroller extends Controller
{
  public function index(){

    $contactpage = contactBackground::all();

    return view('/ABM/contact/index', [
      'contactpage' => $contactpage
    ]);
  }
}
