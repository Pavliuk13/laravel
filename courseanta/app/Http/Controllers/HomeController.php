<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

    public function course($id){
        $element = Course::with('category')->where('id', $id)->first();
        return view('/course', ['course' => $element,
            'comments' => $element->comments]);
    }

    public function user_cart(){
        $auth_user  = Auth::user()->id;
        $user = User::find($auth_user);

        return view('/cart', ['courses' => $user->bought_courses]);
    }

    public function cart(Request $request){
        if (Auth::check()) {
            $auth_user  = Auth::user()->id;
            $user = User::find($auth_user);
            $course_id = $request['id'];
            $user->bought_courses()->attach($course_id);
        }
        return redirect('/courses')->withErrors([
            'formError'=>'Помилка при додаванні курсу в кошик'
        ]);
    }

    public function comment(Request $request){
        $auth_user  = Auth::user()->id;
        $course_id = $request['course_id'];
        $description = $request['description'];
        $date = date('Y-m-d h:i:s', time());
        $data=array('user_id' => $auth_user, 'course_id' => $course_id, "description" => $description, "created" => $date);
        DB::table('comments')->insert($data);
        $route = '/course/' . $course_id;
        return redirect($route)->withErrors([
            'formError'=>'Помилка при додаванні курсу в кошик'
        ]);
    }
}
