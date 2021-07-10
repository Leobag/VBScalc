<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ABMindexcontroller extends Controller
{


    public function index(){

      return view('/ABM/ABMindex');

    }


}
