<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie; // colleghiamo il db movie al controller

class MovieController extends Controller
{
    public function index() { 
       
        $allMovies = Movie::all();
        
        return view('home', compact('allMovies')); 
    }
}