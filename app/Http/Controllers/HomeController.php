<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index() {
     echo "MAMANX";
     return view('/Home');
 }

}
