<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('/home');
    }

    public function about(){
        return view('/about');
    }

    public function courses(){
        return view('/courses', ['categories' => Category::all()]);
    }
}
