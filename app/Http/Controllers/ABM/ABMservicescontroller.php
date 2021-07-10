<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\service;
use App\serviceBackground;

class ABMservicescontroller extends Controller
{

      public function index(){

        $services = service::all();
        $background = serviceBackground::all();

        return view('/ABM/services/index', [
          'services' => $services,
          'backgrounds' => $backgrounds
        ]);
      }


}
