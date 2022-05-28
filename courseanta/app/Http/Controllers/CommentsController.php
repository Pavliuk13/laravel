<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function comment(Request $request){
        $auth_user  = Auth::user()->id;
        $course_id = $request['course_id'];
        $description = $request['description'];
        $date = date('Y-m-d h:i:s', time());
        $data=array('user_id' => $auth_user, 'course_id' => $course_id, "description" => $description, "created" => $date);
        DB::table('comments')->insert($data);
        $route = '/course/' . $course_id;
        return redirect($route);
    }

    public function delete_comment(Request $request){
        $id = $request['comment_id'];
        $course_id = $request['course_id'];
        DB::table('comments')->where('id', $id)->delete();
        $route = '/course/' . $course_id;
        return redirect($route);
    }
}
