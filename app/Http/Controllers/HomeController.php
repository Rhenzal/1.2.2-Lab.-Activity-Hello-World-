<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Default route (welcome page)
    public function index()
    {
        return view('welcome');  // Make sure resources/views/welcome.blade.php exists
    }

    // Route for Home page
    public function home()
    {
        return view('home');  // Make sure resources/views/home.blade.php exists
    }
}
