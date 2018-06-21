<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Movie;

class WelcomeController extends Controller
{
     public function index()
    {
        return view('welcome');
    }
}
