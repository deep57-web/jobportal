<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //This function for call homepage
    public function index()
    {
      return view('front.home');
    }

  




}
