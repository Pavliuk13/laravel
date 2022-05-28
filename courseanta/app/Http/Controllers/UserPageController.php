<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserPageController extends Controller
{
    public function private(){
        $auth_user  = Auth::user()->id;
        $user = User::find($auth_user);

        return view('/private', ['user' => $user]);
    }

    public function update(Request $request){
        $auth_user  = Auth::user()->id;
        $user = User::find($auth_user);
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $user->name . '.jpg';
            $file->move(public_path() . '/img', $file_name);
            $data = array('name' => $user->name, 'username' => $user->username, "email" => $user->email, "image_path" => $file_name);
            DB::table('users')
                ->where('id', '=', $auth_user)
                ->update($data);
        }
        $data = array('name' => $user->name, 'username' => $user->username, "email" => $user->email);
        DB::table('users')
            ->where('id', '=', $auth_user)
            ->update($data);
        return redirect('/private');
    }

    public function user_cart(){
        $auth_user  = Auth::user()->id;
        $user = User::find($auth_user);

        return view('/cart', ['courses' => $user->bought_courses]);
    }
}
