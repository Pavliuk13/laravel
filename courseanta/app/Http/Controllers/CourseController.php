<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function course($id){
        $element = Course::with('category')->where('id', $id)->first();
        return view('/course', ['course' => $element,
            'comments' => $element->comments]);
    }

    public function add_to_cart(Request $request){
        if (Auth::check()) {
            $auth_user  = Auth::user()->id;
            $user = User::find($auth_user);
            $course_id = $request['id'];
            $user->bought_courses()->attach($course_id);
        }
        return redirect('/courses');
    }
}
