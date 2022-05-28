<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;


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
        return view('/courses', ['categories' => Category::all(),
            'courses' => Course::with('category')->get()]);
    }
}
