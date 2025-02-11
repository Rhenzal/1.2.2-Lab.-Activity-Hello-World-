<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // Route for Home page
    public function hello()
    {
        return view('hello');  
    }
}
