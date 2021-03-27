<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       // echo "Welcome Home";
       return view('home.index');
    }
}
