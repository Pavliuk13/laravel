<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function course($id){
        $auth_user  = Auth::user()->id;
        $user = User::find($auth_user);
        $elements = $user->bought_courses;
        $exist_in_cart = 0;
        foreach ($elements as $element){
            if($element->id == $id)
                $exist_in_cart++;
        }
        $element = Course::with('category')->where('id', $id)->first();
        return view('/course', ['course' => $element,
            'comments' => $element->comments,
            'exist_in_cart' => $exist_in_cart]);
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

    public function remove_from_cart(Request $request){
        $auth_user  = Auth::user()->id;
        $user = User::find($auth_user);
        $course_id = $request['id'];
        DB::table('user_course')->where('course_id', $course_id)->where('user_id', $auth_user)->delete();
        return redirect('/courses');
    }
}
